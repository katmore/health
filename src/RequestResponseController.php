<?php
namespace Healthsvc;

abstract class RequestResponseController implements ResponseBodyPrinterInterface {
   use ConfigFileReaderTrait;
   public function __construct(string $config_file=null) {
      $this->setConfigFile($config_file);
   }
   abstract public function getRequest() : Request;
   abstract public function getResponse() : Response;
}