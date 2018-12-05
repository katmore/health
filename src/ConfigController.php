<?php
namespace Healthsvc;

abstract class ConfigController {
   
   /**
    * @var array
    * @private
    */
   private $config;
   
   protected function getConfigVal(string $key) {
      if (!isset($this->config[$key])) return;
      return $this->config[$key];
   }
   
   final public function __construct(array $config=null) {
      $config===null && $config = [];
      $this->config = $config;
   }
   
}