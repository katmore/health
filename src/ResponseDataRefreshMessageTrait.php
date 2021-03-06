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
 * ResponseDataRefreshMessageTrait trait
 *
 * @author D. Bird <dougbird@katmore.com>
 */
trait ResponseDataRefreshMessageTrait {
   /**
    *
    * @var string response message
    * @private
    */
   protected $message;

   /**
    *
    * @var \Healthsvc\InfoItem[] test info as assoc array of health info items, the element keys are the correspdoning test label
    * @private
    */
   protected $healthInfo = [];

   /**
    *
    * @var string[] array containing the label of every successful test
    * @private
    */
   protected $healthSuccess = [];

   /**
    *
    * @var \Healthsvc\InfoItem[] health warnings as assoc array of health info items, the element keys are the correspdoning test label
    * @private
    */
   protected $healthWarn = [];

   /**
    *
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
      $this->message = implode(", ", $message);
   }

}
