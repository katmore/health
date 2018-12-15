<?php
namespace Healthsvc;

abstract class Response implements ResponseInterface {
   
   const JSON_CONTENT_TYPE = 'application/json';
   
   /**
    * @var bool true if the response body corresponds to response data, otherwise <b>bool</b> false
    * @private
    */
   private $hasResponseData = true;
   /**
    * @var array response data corresponding to the response body
    * @private
    */
   private $responseData = [];
   /**
    * @var string response body
    * @private
    */
   private $responseBody;
   /**
    * @var string response content type
    * @private
    */
   private $contentType = self::JSON_CONTENT_TYPE;
   /**
    * @var int HTTP response code
    * @private
    */
   private $responseCode = 200;
   /**
    * @return int HTTP response code
    */
   final public function getResponseCode() : int {
      return $this->responseCode;
   }
   /**
    * @return bool true if the response body corresponds to response data, otherwise <b>bool</b> false
    */
   final public function hasResponseData() : bool {
      return $this->hasResponseData = true;
   }
   /**
    * @return array response data corresponding to the response body
    */
   final public function getResponseData() : array {
      return $this->responseData;
   }
   /**
    * @return string response content type
    */
   final public function getContentType() : string {
      return $this->contentType;
   }
   /**
    * @return string response body
    */
   final public function getResponseBody(bool $pretty_format=false) : string {
      
      if ($pretty_format && $this->hasResponseData) {
         
         if ($this->getContentType()==='application/json') {
            return json_encode($this->responseData,JSON_PRETTY_PRINT);
         }
      }
      return $this->responseBody;
   }
   /**
    * Prints the response body. Additionaly sends the appropriate HTTP headers unless <b>$send_headers</b> is <i>false</i>.
    * @param bool $send_headers Optionally set to <i>false</i> to suppress sending HTTP headers. 
    * @return void
    */
   final public function printResponseBody(bool $send_headers=true,bool $pretty_format=false) : void {
      if ($send_headers) {
         header("Content-type: ".$this->getContentType());
         http_response_code($this->getResponseCode());
      }
      echo $this->getResponseBody($pretty_format);
   }
   final protected function setResponseBody(string $response_body,string $content_type,int $response_code=200) {
      
      $this->hasResponseData = false;
      $this->responseBody = $response_body;
      $this->contentType = $content_type;
      $this->responseCode = $response_code;
   }
   final protected function setResponseData(array $response_data, int $response_code=200) {
      
      if (false===($responseBody = json_encode($response_data))) {
         throw new ResponseDataInvalidException('error while encoding json: '.json_last_error_msg());
      }
      $this->responseData = $response_data;
      
      $this->setResponseBody($responseBody,self::JSON_CONTENT_TYPE,$response_code);
      $this->hasResponseData = true;
   }
   
   
   
   
   
   
   
   
}