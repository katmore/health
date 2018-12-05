<?php
namespace Healthsvc;

trait RequestBodyParserTrait {
   private $requestBody = '';
   private $contentType = '';
   private $requestData = [];
   
   public function getRequestBody() : string {
      return $this->requestBody;
   }
   
   public function getContentType() : string {
      return $this->contentType;
   }
   
   protected function getRequestData(): array {
      return $this->requestData;
   }
   
   protected function setRequestBody(string $request_body=null,string $content_type=null) : void {
      
      $request_body!==null || $request_body = '';
      $content_type!==null || $content_type = '';
      
      $this->requestBody = $request_body;
      $this->contentType = $content_type;
      
      if (substr($this->contentType,0,strlen('multipart/form-data;'))==='multipart/form-data;') {
         $this->requestData = self::parseFormData($this->requestBody,$this->contentType);
      } else if ($this->contentType==='application/x-www-form-urlencoded') {
         parse_str($this->requestBody,$this->requestData);
      } else if ($this->contentType = 'application/json') {
         if (is_array($requestData = json_decode($this->requestBody,true))) {
            $this->requestData = $requestData;
         }
      }
   }
   
   private function parseFormData() : array {
      $data = $boundaryMatches = [];
      preg_match('/boundary=(.*)$/',$this->contentType, $boundaryMatches);
      if (!count($boundaryMatches)) {
         return $data;
      }
      $boundary = $boundaryMatches[1];
      $dataBlocks = preg_split("/-+$boundary/", $this->requestBody);
      array_pop($dataBlocks);
      array_walk($dataBlocks,function($block) use (&$data)
      {
         if (empty($block)) return;
         $matches = [];
         if (strpos($block, 'application/octet-stream') !== FALSE) {
            preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s", $block, $matches);
         } else {
            preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s', $block, $matches);
         }
         $data[$matches[1]] = $matches[2];
      });
      
      return $data;
   }
}