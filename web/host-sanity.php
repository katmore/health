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
      
      $prettyPrint = false;
      if (isset( $_SERVER ['HTTP_ACCEPT'] ) && false === strpos( $_SERVER ['HTTP_ACCEPT'], 'application/json' ) && false !== strpos( $_SERVER ['HTTP_ACCEPT'], 'text/html' )) {
         $prettyPrint = true;
      }
      
      $controller->printResponseBody(true,$prettyPrint);
      
   }
    
};