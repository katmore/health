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
      return new HostSanityRequest($this->requestMethod,$this->requestQuery,$this->requestBody,$this->contentType);
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
   
   public function printResponseBody(bool $send_headers=true, bool $pretty_format=false) : void {
      try {
         $response = $this->getResponse();
         $response->printResponseBody($send_headers,$pretty_format);
      } catch (ResponseException $e) {
         $e->printResponseBody($send_headers,$pretty_format);
      }
   }
   
   private $requestMethod;
   private $requestQuery;
   private $requestBody;
   private $contentType;
   
   public function __construct(string $config_file=null,string $request_method=null,array $request_query=null,string $request_body=null,string $content_type=null) {
      
      $this->requestMethod = $request_method;
      $this->requestQuery = $request_query;
      $this->requestBody = $request_body;
      $this->contentType = $content_type;
      
      parent::__construct($config_file);
      
      $this->config = new HostSanityConfig($this->getConfig());
      
   }
   
}