<?php
namespace Healthsvc;

interface ResponseBodyPrinterInterface {
   public function printResponseBody(bool $send_headers=true) : void;
}