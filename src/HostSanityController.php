<?php
namespace Healthsvc;

class HostSanityController {
   
   final public static function exec(string $cmd, &$stdout="", &$stderr="") :int {
      $pipes = null;
      $proc = proc_open($cmd,[
         0 => ["pipe", "r"],
         1 => ['pipe','w'],
         2 => ['pipe','w'],
      ],$pipes);
      
      if (!is_resource($proc)) return 255;
      
      fclose($pipes[0]);
      
      $status = proc_get_status($proc);
      while ($status["running"]) {
         usleep(10000);
         $status = proc_get_status($proc);
      }
      
      $stdout = stream_get_contents($pipes[1]);
      fclose($pipes[1]);
      
      $stderr = stream_get_contents($pipes[2]);
      fclose($pipes[2]);
      
      
      $proc_close_status = proc_close($proc);
      
      if ($proc_close_status!==-1) {
         return $proc_close_status;
      }
      if (isset($status['exitcode']) && ($status['exitcode']!==-1)) {
         return $status['exitcode'];
      }
      return -1;
   }
   
   /**
    * @var \Healthsvc\HostSanityStatusData
    * @private
    */
   private $statusData;
   
   /**
    * @return \Healthsvc\HostSanityStatusData
    */
   public function getStatusData() : HostSanityStatusData {
      return $this->statusData;
   }
   
   public function __construct(array $exec,array $warn_exit_status,array $bin,string $bin_dir) {
      
      $this->statusData = new HostSanityStatusData(0,null,gethostname());
      
      if (count($bin)) {
         if (!is_dir($bin_dir)) {
            trigger_error("bin_dir does not exit: $bin_dir",E_USER_ERROR);
         }
         $bin_dir = realpath($bin_dir);
         array_walk($bin, function($cmd,$label) use(&$exec,$bin_dir)
         {
            $exec[$label] = "$bin_dir/$cmd";
         });
      }
      
      array_walk($exec,function($cmd,$label) {
            
            $stderr = $stdout = null;
            $status = static::exec($cmd,$stdout,$stderr);
            if ($status===0) {
               $info=null;
               if (!empty($stdout) && empty($stderr)) {
                  //$info['stdout']=explode("\n",trim($stdout));
                  $info = new CommandInfoItem($stdout);
               } else if (!empty($stderr)){
                  $info = new CommandErrorInfoItem($stdout,$stderr);
               }
               $this->statusData->setHealthSuccess($label,$info);
            } else {
               $this->statusData->setExecExitStatus($label,$status);
               if (!empty($stdout) && empty($stderr)) {
                  $info = new CommandInfoItem($stdout);
               } else if (!empty($stderr)){
                  $info = new CommandErrorInfoItem($stdout,$stderr);
               } else {
                  $info = new ErrorInfoItem("test failed with exit status $status");
               }
               $this->statusData->setHealthFailure($label,$info);
            }
      });
      
      array_walk($warn_exit_status,function($status,$label) {
         if (!$this->statusData->hasHealthFailure($label)) return;
         if (!$this->statusData->hasExecExitStatus($label)) return;
         $exitStatus = $this->statusData->getExecExitStatus()[$label];
        
         if ( (is_scalar($status) && ($exitStatus===$status)) ||
            (is_array($status) && in_array($exitStatus,$status,true)) ) {
            $this->statusData->moveHealthFailureToHealth($label);
         }
      });
   }
}