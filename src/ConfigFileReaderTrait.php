<?php
namespace Healthsvc;

trait ConfigFileReaderTrait {
   private $config = [];
   protected function getConfig() : array {
      return $this->config;
   }
   protected function setConfigFile(string $config_file=null) {
      if (is_file($config_file) && (is_array($config = require $config_file))) {
         $this->config = $config;
      }
   }
}