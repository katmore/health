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

use RuntimeException;

/**
 * ResponseDataInvalidException class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class ResponseDataInvalidException extends RuntimeException {
   public function getReason() : string {
      return $this->reason;
   }
   private $reason;
   public function __construct(string $reason) {
      $this->reason = $reason;
      parent::__construct("invalid response data provided: $reason");
   }
}
