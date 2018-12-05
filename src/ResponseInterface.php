<?php
namespace Healthsvc;

interface ResponseInterface extends ResponseBodyPrinterInterface {
   public function getResponseCode() : int;
   public function getContentType() : string;
   public function getResponseBody() : string;
}