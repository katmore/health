<?php
namespace Healthsvc;

class HostSanityRequestResponseController extends RequestResponseController {
   
   /**
    * @var \Healthsvc\HostSanityConfig
    */
   private $config;
   
   /**
    * @throws \Healthsvc\RequestMethodNotAllowedException
    */
   public function getRequest(): Request {
      return new HostSanityRequest;
   }
   
   /**
    * @throws \Healthsvc\RequestMethodNotAllowedException
    */
   public function getResponse(): Response {
      $this->getRequest();
      $controller = new HostSanityController(
         $this->config->getExec(),
         $this->config->getWarnExitStatus(),
         $this->config->getBin(),
         $this->config->getBinDir());
      return new HostSanityResponse($controller->getStatusData());
   }
   
   public function printResponseBody(bool $send_headers=true) : void {
      try {
         $response = $this->getResponse();
         $response->printResponseBody($send_headers);
      } catch (ResponseException $e) {
         $e->printResponseBody($send_headers);
      }
   }
   
   public function __construct(string $config_file=null) {
      
      parent::__construct($config_file);
      
      $this->config = new HostSanityConfig($this->getConfig());
      
   }
   
}