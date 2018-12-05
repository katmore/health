<?php
namespace Healthsvc;

abstract class Request {
   
   use RequestBodyParserTrait;
   
   private $requestMethod = 'GET';
   private $requestQuery = [];
   
   abstract public function isRequestMethodAllowed() : bool;
   
   public function getRequestQuery() : array {
      return $this->requestQuery;
   }
   
   public function getRequestMethod() : string {
      return $this->requestMethod;
   }
   
   
   /**
    * @throws \Healthsvc\RequestMethodNotAllowedException
    */
   public function __construct(string $request_method=null,array $request_query=null,string $request_body=null,string $content_type=null) {
      
      $request_method===null && isset($_SERVER['REQUEST_METHOD']) && $request_method = $_SERVER['REQUEST_METHOD'];
      
      if (!$this->isRequestMethodAllowed($request_method)) {
         throw new RequestMethodNotAllowedException($request_method);
      }
      
      $this->requestMethod = $request_method;
      
      $request_query===null && $request_query = $_GET;
      
      $this->requestQuery = $request_query;
      
      $request_body===null && false===($request_body = file_get_contents('php://input')) && $request_body = null;
      
      $content_type===null && isset($_SERVER['CONTENT_TYPE']) && $content_type = $_SERVER['CONTENT_TYPE'];
      
      $this->setRequestBody($request_body,$content_type);
      
   }
   
   
   
   
   
   
   
   
   
}
