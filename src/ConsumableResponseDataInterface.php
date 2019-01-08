<?php

/*
 * This file is part of the Healthsvc package.
 *
 * (c) D. Bird <dougbird@katmore.com>, All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Healthsvc;

/**
 * ConsumableResponseDataInterface interface
 *
 * @author D. Bird <dougbird@katmore.com>
 */
interface ConsumableResponseDataInterface {
   /**
    * Determines if at least one test outcome has been set.
    *
    * @return bool <i>true</i> if at least one test outcome has been set, <b>bool</b> <i>false</i> otherwise
    */
   public function hasAnyTest() : bool;

   /**
    * Provides an ISO 8601 timestamp of when the health status was determined.
    *
    * @return string ISO 8601 timestamp
    */
   public function getHealthStatusTime() : string;

   /**
    * Provides number of seconds the health status should be cached.
    *
    * @return int health status time to live
    */
   public function getHealthStatusTtl() : int;

   /**
    * Provides any health info items that have been associated a test.
    *
    * @return \Healthsvc\InfoItem[] test info as assoc array of health info items, the element keys are the correspdoning test label
    */
   public function getHealthInfo() : array;

   /**
    * Provides an array of test labels in "success" status.
    *
    * @return string[] array containing the label of every test having the "success" status
    */
   public function getHealthSuccess() : array;

   /**
    * Provides an assoc array of test info items in "warn" status.
    *
    * @return \Healthsvc\InfoItem[] element keys are the correspdoning test label
    */
   public function getHealthWarn() : array;

   /**
    * Provides an assoc array of test info items in "failure" status.
    *
    * @return \Healthsvc\InfoItem[] element keys are the correspdoning test label
    */
   public function getHealthFailure() : array;


   public function hasAllHealthSuccess() : bool;
   public function hasAnyHealthFailure() : bool;
   public function hasAnyHealthWarn() : bool;
   public function hasExecExitStatus(string $label) : bool;
   public function hasHealthFailure(string $label) : bool;
}
