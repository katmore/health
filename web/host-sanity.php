<?php

use Healthsvc\HostSanityRequestResponseController;

new class() {
   const CONFIG_DIR = __DIR__.'/../config';
   const AUTOLOAD_PATH = __DIR__.'/../vendor/autoload.php';
   
   public function __construct() {
  
      if (is_file(self::AUTOLOAD_PATH)) {
         require_once self::AUTOLOAD_PATH;
      }
      
      $controller = new HostSanityRequestResponseController(self::CONFIG_DIR.'/'.basename(__FILE__));
      
      $controller->printResponseBody();
      
   }
    
};