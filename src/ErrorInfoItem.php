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
 * ErrorInfoItem class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class ErrorInfoItem extends InfoItem {
   protected $message;
   public function getMessage(): string {
      return $this->message;
   }

   public function __construct(string $message) {
      $this->message = $message;
   }

}
