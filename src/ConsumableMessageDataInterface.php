<?php
namespace Healthsvc;

interface ConsumableMessageDataInterface {
   /**
    * Provides message associated with this health status.
    * 
    * @return string message
    */
   public function getMessage() : string;
}