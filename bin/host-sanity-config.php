#!/usr/bin/env php
<?php
/**
 * Healthsvc host-sanity installer
 * 
 */

/**
 * @private
 */
new class() {
   
   const ME_ABOUT = "configures the web/host-sanity.php API endpoint";
   
   const ME_USAGE =<<<USAGE
[--help] | [<...Options>] <...TEST-ARGS>
[--no-autoload-ok] [--non-interactive] [--overwrite-ok] [<...Options>] <...TEST-ARGS>
[<...Options>] [--exec|--bin](=--bin) <TEST-COMMAND> [<...TEST-COMMAND-ARGS>]
USAGE;
   
   const ME = 'host-sanity-config.php';
   
   const ME_LABEL = 'Healthsvc host-sanity installer';
   
   const ME_URL = 'https://github.com/katmore/healthsvc#host-sanity-installer-script';
    
   const COPYRIGHT = '(c) 2018 Doug Bird. All Rights Reserved.';
   
   const APP_ROOT = __DIR__.'/../';
   
   const VENDOR_AUTOLOAD = self::APP_ROOT.'/vendor/autoload.php';
   
   const BIN_RELDIR = 'bin/host-sanity';
   
   const BIN_ROOT = self::APP_ROOT.'/'.self::BIN_RELDIR;
   
   const CONFIG_PATH = self::APP_ROOT.'/config/host-sanity.php';
   
   /**
    * @var int
    */
   private $exitStatus = 0;
   
   /**
    * @var bool
    */
   private $nonInteractive = false;
   
   /**
    * @var bool
    */
   private $supressHintError = false;
   
   /**
    * @return void
    */
   private function printUsage() : void {
      echo "Usage:\n";
      $usage = explode("\n",trim(self::ME_USAGE));
      array_walk($usage,function($line) {
         echo "   ".self::ME." $line\n";
      });
   }

   /**
    * @return void
    */
   private function printHelp() : void {
      echo self::ME_ABOUT."\n".self::ME_URL."\n\n";
      $this->printUsage();
      echo "\n";
      echo <<<"EOT"
Runtime Mode Switches:
  --help
   Print this message then exit.
   
  --usage
   Print message regarding available switches and options then exit.

  --print-bin-list
   Print a list of every available 'bin' test (located in the 'healthsvc/bin/sanity' directory) and exit.
   
Installer Options:
  --non-interactive
   Forces "non interactive mode": no input prompts will be issued.
   
  --no-autoload-ok
   Bypass the check for the composer generated vendor/autoload.php file.
   
  --overwrite-ok
   Always overwrite any file that already exists.
   
Test Options:
  --bin
   Creates a 'bin' test which executes a script in the 'healthsvc/bin/sanity' directory.
   Default test type.
   
  --exec
   Creates an 'exec' test which executes a local system command.

  --warn-exit-status=<EXIT-STATUS-CSV>
   Defines the exit status codes that will cause a test with a "failure" status to instead have a "warn" status.
   Comma separated list of integers.

Arguments:
   <TEST-LABEL>
    Test label

   <TEST-COMMAND>
    Test command specification.
    If the test type is '--bin', this is the name of the script in the 'healthsvc/bin/sanity' directory.
    If the test type is '--exec', this is the system command.
    
   <...TEST-ARGS>
    Specify one or more arguments to pass-thru to the <TEST-COMMAND>.
    Some commands require one or more arguments.
    See '--help=<TEST-COMMAND>' for a command's help message.
EOT;
      echo "\n";
      if (! is_file(self::VENDOR_AUTOLOAD)) {
         if (!isset(getopt("",['no-autoload-ok'])['no-autoload-ok'])) {
            $dir = realpath(static::APP_ROOT);
            echo <<<"EOT"
            
Warning: class autoloading is missing (i.e. 'vendor/autoload.php'), please run composer.
   (See: 'cd $dir && composer update' or use the '--no-autoload-ok' flag to bypass this check)
   
EOT;
         }
      }
   }
   
   public function __destruct() {
      if ('cli' === PHP_SAPI) {
         $this->exitStatus===2 && $this->printHintError();
         exit($this->exitStatus);
      }
   }
   
   public function __construct() {
      
      if ('cli' !== PHP_SAPI) {
         if (!headers_sent()) {
            header('Content-type: text/plain');
            http_response_code(500);
         }
         echo "\nERROR: ".basename(__FILE__)." must be run from the command-line\n";
         return;
      }
      
      $this->printIntro();
      
      if (isset(getopt("",["help",])['help'])) {
         $this->printHelp();
         return;
      }
      
      if (isset(getopt("",["usage",])['usage'])) {
         $this->printUsage();
         return;
      }
      
      if (isset(getopt("",["print-bin-list",])['print-bin-list'])) {
         $this->printBinList();
         return;
      }
      
      if (!($this->nonInteractive = !stream_isatty ( STDOUT ))) {
         $this->nonInteractive = isset(getopt("",["non-interactive",])['non-interactive']);
      }
      
      if (!is_file(self::VENDOR_AUTOLOAD)) {
         $skipAutoloadCheck = false;
         if (isset(getopt("",['no-autoload-ok'])['no-autoload-ok'])) {
            $skipAutoloadCheck = true;
         } elseif (!$this->nonInteractive) {
            $this->printErrLine(["Warning: class autoloading is missing (i.e. 'vendor/autoload.php')"]);
            $this->printInteractiveIntroOnce();
            $v = trim(readline("Abort because autoloading is missing? (choose 'n' to continue anyway) [(y)/n]: "));
            echo "\n";
            if (substr($v,0,1)==='n') {
               $skipAutoloadCheck = true;
            }
         }
         if (!$skipAutoloadCheck) {
            $dir = realpath(self::APP_ROOT);
            $this->printErrLine([
               "Error: class autoloading is missing (i.e. 'vendor/autoload.php'), please run composer.",
               "   (See: 'cd $dir && composer update' or use the '--no-autoload-ok' flag to bypass this check)",
            ]);
            return $this->exitStatus = 1;
         }
      }
      
      if (!($binMode = isset(getopt("",["bin",])['bin']))) {
         if (!($execMode = isset(getopt("",["exec",])['exec']))) {
            $binMode = true;
         }
      }
      
      /*
       * get <TEST-COMMAND> and <TEST-ARGS>
       */
      $test = new class() {
         /**
          * @var string
          */
         private $label;
         /**
          * @var string
          */
         private $command;
         /**
          * @var string[]
          */
         private $argv = [];
         /**
          * @var int[]
          */
         private $warnExitStatus = [];
         
         public function getLabel() : string {
            is_string($this->label) || $this->label = "";
            return $this->label;
         }
         public function getCommand() : string {
            is_string($this->command) || $this->command = "";
            return $this->command;
         }
         public function getArgv() : array {
            return $this->argv;
         }
         public function getWarnExitStatus() : array {
            return $this->warnExitStatus;
         }
         public function __construct() {
            global $argv;
            $optind = 0;
            $opt = getopt('',['warn-exit-status::'],$optind);
            $i=-1;
            array_walk($argv,function($v)
               use(&$optind,&$i)
            {
               $i++;
               if ($i<$optind) return;
               if ($this->label===null) {
                  $this->label = $v;
                  return;
               }
               if ($this->command===null) {
                  $this->command = $v;
                  return;
               }
               $this->argv []= $v;
            });
            if (isset($opt['warn-exit-status'])) {
               $warnExitStatus = explode(',',$opt['warn-exit-status']);
               array_walk($warnExitStatus,function($exitStatus)
               {
                  $exitStatus = trim($exitStatus);
                  if (ctype_digit($exitStatus)) {
                     $this->warnExitStatus []= (int) $exitStatus;
                  }
               });
            }
         }
      };
      
      if (empty($test->getLabel())) {
         $this->printErrLine(['missing <TEST-LABEL>']);
         return $this->exitStatus = 2;
      }
      
      if (empty($test->getCommand())) {
         $this->printErrLine(['missing <TEST-COMMAND>']);
         return $this->exitStatus = 2;
      }
      
      if ($binMode) {
         
         $this->binMode($test->getLabel(),$test->getCommand(),$test->getArgv(),$test->getWarnExitStatus());
         return;
         
      }
      
      if ($execMode) {
         
         $this->execMode($test->getLabel(),$test->getCommand(),$test->getArgv(),$test->getWarnExitStatus());
         return;
         
      }
      
   }
   
   private function setWarnExitStatusConfig(string $label, array $warn_exit_status) {
      if (!count($warn_exit_status)) return;
      $configWarnExitStatus = $this->getConfigVal('warn-exit-status');
      if (!is_array($configWarnExitStatus)) $configWarnExitStatus = [];
      $configWarnExitStatus[$label] = $warn_exit_status;
      if (true===($status=$this->setConfigVal('warn-exit-status',$configWarnExitStatus))) {
         $this->printLine(["successfully modified the 'warn-exit-status' for test '$label' in '".basename(self::CONFIG_PATH)."' config file"]);
      } else if (null===$status) {
         $this->printLine(["the 'warn-exit-status' for test '$label' with identical parameters already exists in '".basename(self::CONFIG_PATH)."' config file"]);
      }
      return $status;
   }
   
   private function execMode(string $label,string $command, array $argv, array $warn_exit_status) {
      if (empty($command)) {
         $this->printErrLine(['missing <TEST-COMMAND>']);
         return $this->exitStatus = 2;
      }

      $fullCommand = trim($command.' '.implode(" ",$argv));
      $this->printLine(["full '$label' command: $fullCommand"]);
      
      $configExec = $this->getConfigVal('exec');
      if (!is_array($configExec)) $configExec = [];
      
      $configExec[$label] = $fullCommand;
      
      if (true===($status=$this->setConfigVal('exec',$configExec))) {
         $this->printLine(["successfully added test '$label' to '".basename(self::CONFIG_PATH)."' config file"]);
      } else if (null===$status) {
         $this->printLine(["test '$label' with identical parameters already exists in '".basename(self::CONFIG_PATH)."' config file"]);
      }
      
      if (!is_int($status)) {
         $this->setWarnExitStatusConfig($label,$warn_exit_status);
      }
      
   }
   
   private function binMode(string $label,string $command, array $argv, array $warn_exit_status) {
      if (empty($command)) {
         $this->printErrLine(['missing <TEST-COMMAND>']);
         return $this->exitStatus = 2;
      }
      $script = self::BIN_ROOT."/$command";
      if (!is_file($script)) {
         $this->printErrLine([
            "invalid --bin <TEST-COMMAND>: '$command' not found",
            "See:",
            "   ".self::ME." --print-bin-list"
         ]);
         $this->supressHintError = true;
         return $this->exitStatus = 2;
      }
      
      $fullCommand = trim($command.' '.implode(" ",$argv));
      $this->printLine(["full '$label' command: $fullCommand"]);
      
      $configBin = $this->getConfigVal('bin');
      if (!is_array($configBin)) {
         $configBin = [];
      }
      
      $configBin[$label] = $fullCommand;
      
      if (true===($status=$this->setConfigVal('bin',$configBin))) {
         $this->printLine(["successfully added test '$label' to '".basename(self::CONFIG_PATH)."' config file"]);
      } else if (null===$status) {
         $this->printLine(["test '$label' with identical parameters already exists in '".basename(self::CONFIG_PATH)."' config file"]);
      }
      
      if (!is_int($status)) {
         $this->setWarnExitStatusConfig($label,$warn_exit_status);
      }
      
   }
   /**
    * @param string $key config key
    * @return bool <i>true</i> if new key/value pair was saved to config file, 
    *    <b>null</b> if identical value already existed for the key,
    *    <b>int</b> exit status code upon error  
    */
   private function setConfigVal(string $key, $value) {
      $currentVal = $this->getConfigVal($key);
      if ($currentVal===null || md5(json_encode($currentVal))!==md5(json_encode($value))) {
         $config = $this->readConfig();
         $config[$key] = $value;
         if (is_file(self::CONFIG_PATH)) {
            if (false===($configMd5 = md5_file(self::CONFIG_PATH))) {
               $this->printErrLine(['failed to read md5 of config file: '.basename(self::CONFIG_PATH)]);
               return $this->exitStatus = 1;
            }
            $configBackupPath = dirname(self::CONFIG_PATH).'/'.pathinfo(self::CONFIG_PATH,PATHINFO_FILENAME).'-'.$configMd5.'-BACKUP.php';
            if (!is_file($configBackupPath) && !copy(self::CONFIG_PATH,$configBackupPath)) {
               $this->printErrLine(['failed to create backup of config file: '.basename(self::CONFIG_PATH)]);
               return $this->exitStatus = 1;
            }
         }
         if (false===file_put_contents(self::CONFIG_PATH,"<?php\nreturn ".var_export($config,true).";\n")) {
            $this->printErrLine(['failed to write config file: '.basename(self::CONFIG_PATH)]);
            return $this->exitStatus = 1;
         }
         return true;
      }
   }
   
   private function readConfig() : array {
      if (is_file(self::CONFIG_PATH)) {
         $config = require(self::CONFIG_PATH);
         if (is_array($config)) return $config;
      }
      return [];
   }
   
   /**
    * @return null|mixed <b>null</b> if config value does not exist, <b>mixed</b> otherwise
    */
   private function getConfigVal(string $key) {
      $config = $this->readConfig();
      return isset($config[$key])?$config[$key]:null;
   }
   
   /**
    * @return void
    */
   private function printBinList() : void {
      $found = false;
      $binTests = scandir(self::BIN_ROOT);
      array_walk($binTests,function($file) use(&$found) {
         if (!is_file(self::BIN_ROOT."/$file")) return;
         if (!$found) {
            $found = true;
            echo self::BIN_RELDIR." scripts:\n";
         }
         echo "   $file\n";
      });
      if (!$found) {
         $this->printErrLine(['no bin scripts found in BIN_ROOT: '.self::BIN_ROOT]);
         $this->exitStatus = 1;
      }
   }
   
   /**
    * @return void
    */
   private function printHintError() : void {
      if ($this->supressHintError) return;
      $this->printErrLine([
         "See:",
         "   ".self::ME." --usage",
         "   ".self::ME." --help",
      ]);
   }
   
   /**
    * @return void
    */
   private function printIntro() : void {
      echo self::ME_LABEL."\n".self::COPYRIGHT."\n";
   }
   
   /**
    * @return void
    * @param string[]
    */
   private function printErrLine(array $strLines) : void {
      $stderr = fopen('php://stderr', 'w');
      //foreach ($strLines as $line) fwrite($stderr, "$line"."\n");
      array_walk($strLines,function($line) use(&$stderr) {
         fwrite($stderr, "$line"."\n");
      });
      fclose($stderr);
   }
   
   /**
    * @return void
    * @param string[]
    */
   private function printLine(array $strLines) : void {
      //foreach ($strLines as $line) echo "$line"."\n";
      array_walk($strLines,function($line) {
         echo "$line"."\n";
      });
   }
   
};