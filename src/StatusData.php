<?php
namespace Healthsvc;

abstract class StatusData extends SerializableData implements 
   ConsumableResponseDataInterface, 
   BuildableResponseDataInterface,
   BuildableExecExitStatusDataInterface,
   ConsumableExecExitStatusDataInterface,
   ConsumableMessageDataInterface
{
   use ResponseDataRefreshMessageTrait;
   
   /**
    * @var int[] exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label
    * @private
    */
   protected $execExitStatus = [];
   
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
    * Determines if at least one test outcome has been set.
    *
    * @return bool <i>true</i> if at least one test outcome has been set, <b>bool</b> <i>false</i> otherwise
    */
   public function hasAnyTest() : bool {
      return count($this->healthSuccess) || count($this->healthWarn) || count($this->healthFailure);
   }
   
   /**
    * Provides an ISO 8601 timestamp of when the health status was determined.
    * 
    * @return string ISO 8601 timestamp
    */
   public function getHealthStatusTime() : string {
      return $this->healthStatusTime;
   }
   
   /**
    * Provides number of seconds the health status should be cached.
    * 
    * @return int health status time to live
    */
   public function getHealthStatusTtl() : int {
      return $this->healthStatusTtl;
   }
   
   /**
    * Provides any health info items that have been associated a test.
    * 
    * @return \Healthsvc\InfoItem[] test info as assoc array of health info items, the element keys are the correspdoning test label
    */
   public function getHealthInfo() : array {
      return $this->healthInfo;
   }
   
   /**
    * Provides any exit status codes that are associated with tests.
    * 
    * @return int[] exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label
    */
   public function getExecExitStatus() : array {
      return $this->execExitStatus;
   }
   
   /**
    * Provides an array of test labels in "success" status.
    * 
    * @return string[] array containing the label of every test having the "success" status
    */
   public function getHealthSuccess() : array {
      return $this->healthSuccess;
   }
   
   /**
    * Provides an assoc array of test info items in "warn" status.
    * 
    * @return \Healthsvc\InfoItem[] element keys are the correspdoning test label
    */
   public function getHealthWarn() : array {
      return $this->healthWarn;
   }
   
   /**
    * Provides an assoc array of test info items in "failure" status.
    * 
    * @return \Healthsvc\InfoItem[] element keys are the correspdoning test label
    */
   public function getHealthFailure() : array {
      return $this->healthFailure;
   }
   
   /**
    * Provides message associated with this health status.
    * 
    * @return string message
    */
   public function getMessage() : string {
      return $this->message;
   }
   
   /**
    * Associates an exec exit status with a test.
    *  
    * @param string $test_label test label
    * @param int $exit_status exit status of test
    * 
    * @return void
    */
   public function setExecExitStatus(string $test_label, int $exit_status) : void {
      $this->execExitStatus[$test_label] = $exit_status;
      $this->refreshMessage();
   }
   
   /**
    * Sets a test's outcome to "failure" status.
    * 
    * @param string $test_label test label
    * @param \Healthsvc\InfoItem $health_failure info item associated with this test outcome 
    * 
    * @return void
    */
   public function setHealthFailure(string $test_label, InfoItem $health_failure) : void {
      $this->healthFailure[$test_label] = $health_failure;
      $this->refreshMessage();
   }
   
   /**
    * Sets a test's outcome to "warn" status.
    *
    * @param string $test_label test label
    * @param \Healthsvc\InfoItem $health_warn info item associated with this test outcome
    *
    * @return void
    */
   public function setHealthWarn(string $test_label, InfoItem $health_warn) : void {
      $this->healthWarn[$test_label] = $health_warn;
      $this->refreshMessage();
   }
   
   /**
    * Determines if all tests have the "succcess" status.
    * 
    * @return bool <i>true</i> if no tests have "warn" or "failure" status, <b>bool</b> <i>false</i> otherwise
    */
   public function hasAllHealthSuccess() : bool {
      return
      count($this->healthSuccess) && 
      !count($this->healthFailure) && 
      !count($this->healthWarn);
   }
   
   /**
    * Determines if any tests have the "failure" status.
    *
    * @return bool <i>true</i> if any test has the "failure" status, <b>bool</b> <i>false</i> otherwise
    */
   public function hasAnyHealthFailure() : bool {
      return !! count($this->healthFailure);
   }
   
   /**
    * Determines if any tests have the "warn" status.
    *
    * @return bool <i>true</i> if any test has the "warn" status, <b>bool</b> <i>false</i> otherwise
    */
   public function hasAnyHealthWarn() : bool {
      return !! count($this->healthWarn);
   }
   
   /**
    * Determines if a test has an associated exec exit status.
    * 
    * @param string $test_label test label
    * 
    * @return bool <i>true</i> if the test has an associated exec exit status, <b>bool</b> <i>false</i> otherwise
    */
   public function hasExecExitStatus(string $test_label) : bool {
      if (isset($this->execExitStatus[$test_label])) return true;
      return false;
   }
   
   /**
    * Determines if a test has the "failure" status.
    *
    * @param string $test_label test label
    *
    * @return bool <i>true</i> if the test has the "failure" status, <b>bool</b> <i>false</i> otherwise
    */
   public function hasHealthFailure(string $test_label) : bool {
      if (isset($this->healthFailure[$test_label])) return true;
      return false;
   }
   
   /**
    * Moves a test from "failure" status to "warn" status.
    * 
    * @param string $test_label test label
    * 
    * @return bool <i>true</i> if the test was moved from "failure" to "warn" status,
    *    <b>bool</b> <i>false</i> if the test was already in "warn" status or did not exist
    */
   public function moveHealthFailureToWarn(string $test_label) : bool {
      if (isset($this->healthFailure[$test_label])) {
         $this->healthWarn[$test_label] = $this->healthFailure[$test_label];
         unset($this->healthFailure[$test_label]);
         $this->refreshMessage();
         return true;
      }
      return false;
   }
   
   /**
    * Sets a test's outcome to "success" status.
    *
    * @param string $test_label test label
    * @param \Healthsvc\InfoItem $success_info info item associated with this test outcome
    *
    * @return void
    */
   public function setHealthSuccess(string $test_label,InfoItem $success_info=null) : void {
      $success_info!==null && $this->healthInfo[$test_label] = $success_info;
      !in_array($test_label,$this->healthSuccess) && $this->healthSuccess []= $test_label;
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