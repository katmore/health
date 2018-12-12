<?php
namespace Healthsvc\TestCase;

use Psr\Http\Message\ResponseInterface;

class ResponseConfigInfo {
   
   /**
    * @return \Psr\Http\Message\ResponseInterface
    */
   public function getResponse() : ResponseInterface {
      return $this->response;
   }
   
   /**
    * @return array
    */
   public function getConfig() : array {
      
   }
   /**
    * @return mixed
    */
   public function getInfoItem(string $key) {
      if (isset($this->info[$key])) return $this->info[$key];
      return null;
   }
      
   /**
    * @var array
    */
   protected $config;
   /**
    * @var \Psr\Http\Message\ResponseInterface
    */
   protected $response;
   /**
    * @var array
    */
   protected $info;
   
   
   public function __construct(ResponseInterface $response, array $config, array $info) {
      $this->response = $response;
      $this->config = $config;
      $this->info = $info;
   }
}