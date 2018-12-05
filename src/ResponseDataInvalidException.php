<?php
namespace Healthsvc;

use RuntimeException;

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