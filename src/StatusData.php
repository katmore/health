<?php
namespace Healthsvc;

abstract class StatusData extends SerializableData {
   
   /**
    * @var string response message
    * @private
    */
   protected $message;
   
   /**
    * @var string ISO 8601 timestamp of when health status generated
    * @private
    */
   protected $healthStatusTime;
   
   /**
    * @var int health status time to live
    * @private
    */
   protected $healthStatusTtl;
   
   /**
    * @var \Healthsvc\InfoItem[] test info as assoc array of health info items, the element keys are the correspdoning test label
    * @private
    */
   protected $healthInfo = [];
   
   /**
    * @var int[] exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label
    * @private
    */
   protected $execExitStatus = [];
   
   /**
    * @var string[] array containing the label of every successful test
    * @private
    */
   protected $healthSuccess = [];
   
   /**
    * @var \Healthsvc\InfoItem[] health warnings as assoc array of health info items, the element keys are the correspdoning test label
    * @private
    */
   protected $healthWarn = [];
   
   /**
    * @var \Healthsvc\InfoItem[] health failures as assoc array of health info items, the element keys are the correspdoning test label
    * @private
    */
   protected $healthFailure = [];
   
   protected function refreshMessage() : void {
      $message = [];
      if (!count($this->healthWarn) && !count($this->healthFailure)) {
         if ($this->hasAnyTest()) {
            $message []= 'total success';
         } else {
            $message []= 'no sanity commands are configured';
         }
      } else {
         if (count($this->healthWarn)) {
            $message[] = 'one or more warnings';
         }
         if (count($this->healthFailure)) {
            $message[] = 'one or more failures';
         }
      }
      $this->message = implode(", ",$message);
   }
   
   public function hasNoTests() : bool {
      return !$this->hasAnyTest();
   }
   
   public function hasAnyTest() : bool {
      return count($this->healthSuccess) || count($this->healthWarn) || count($this->healthFailure);
   }
   
   /**
    * @return string ISO 8601 timestamp of when health status generated
    */
   public function getHealthStatusTime() : string {
      return $this->healthStatusTime;
   }
   
   /**
    * @return int health status time to live
    */
   public function getHealthStatusTtl() : int {
      return $this->healthStatusTtl;
   }
   
   /**
    * @return \Healthsvc\InfoItem[] test info as assoc array of health info items, the element keys are the correspdoning test label
    */
   public function getHealthInfo() : array {
      return $this->healthInfo;
   }
   
   /**
    * @return int[] exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label
    */
   public function getExecExitStatus() : array {
      return $this->execExitStatus;
   }
   
   /**
    * @return string[] array containing the label of every successful test
    */
   public function getHealthSuccess() : array {
      return $this->healthSuccess;
   }
   
   /**
    * @return \Healthsvc\InfoItem[] health warnings as assoc array of health info items, the element keys are the correspdoning test label
    */
   public function getHealthWarn() : array {
      return $this->healthWarn;
   }
   
   /**
    * @return \Healthsvc\InfoItem[] health failures as assoc array of health info items, the element keys are the correspdoning test label
    */
   public function getHealthFailure() : array {
      return $this->healthFailure;
   }
   
   /**
    * @return string response message
    */
   public function getMessage() : string {
      return $this->message;
   }
   
   public function setExecExitStatus(string $label, int $exit_status) : void {
      $this->execExitStatus[$label] = $exit_status;
      $this->refreshMessage();
   }
   
   public function setHealthFailure(string $label, InfoItem $health_failure) : void {
      $this->healthFailure[$label] = $health_failure;
      $this->refreshMessage();
   }
   
   public function setHealthWarn(string $label, InfoItem $health_warn) : void {
      $this->healthWarn[$label] = $health_warn;
      $this->refreshMessage();
   }
   
   public function hasAllHealthSuccess() : bool {
      return
      count($this->healthSuccess) && 
      !count($this->healthFailure) && 
      !count($this->healthWarn);
   }
   
   public function hasAnyHealthFailure() : bool {
      return !! count($this->healthFailure);
   }
   
   public function hasAnyHealthWarn() : bool {
      return !! count($this->healthWarn);
   }
   
   public function hasExecExitStatus(string $label) : bool {
      if (isset($this->execExitStatus[$label])) return true;
      return false;
   }
   
   public function hasHealthFailure(string $label) : bool {
      if (isset($this->healthFailure[$label])) return true;
      return false;
   }
   
   public function moveHealthFailureToWarn(string $label) : bool {
      if (isset($this->healthFailure[$label])) {
         $this->healthWarn[$label] = $this->healthFailure[$label];
         unset($this->healthFailure[$label]);
         $this->refreshMessage();
         return true;
      }
      return false;
   }
   
   public function setHealthSuccess(string $label,InfoItem $success_info=null) : void {
      $success_info!==null && $this->healthInfo[$label] = $success_info;
      !in_array($label,$this->healthSuccess) && $this->healthSuccess []= $label;
      $this->refreshMessage();
   }
   
   public function __construct(int $health_staus_ttl=0, string $health_status_time=null) {
      
      $this->healthStatusTtl = $health_staus_ttl;
      if ($health_status_time!==null) {
         $health_status_time = strtotime($health_status_time);
      }
      if (is_int($health_status_time)) {
         $this->healthStatusTime = date('c',$health_status_time);
      } else {
         $this->healthStatusTime = date('c');
      }
      
   }

}