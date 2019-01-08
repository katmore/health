<?php

/*
 * This file is part of the Healthsvc package.
 *
 * (c) D. Bird <dougbird@katmore.com>, All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Healthsvc;

/**
 * RequestBodyParserTrait trait
 *
 * @author D. Bird <dougbird@katmore.com>
 */
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

   protected function setRequestBody(string $request_body=null, string $content_type=null) : void {

      $request_body!==null || $request_body = '';
      $content_type!==null || $content_type = '';

      $this->requestBody = $request_body;
      $this->contentType = $content_type;

      if ($this->contentType==='application/x-www-form-urlencoded') {
         parse_str($this->requestBody, $this->requestData);
      } else if ($this->contentType = 'application/json') {
         if (is_array($requestData = json_decode($this->requestBody, true))) {
            $this->requestData = $requestData;
         }
      }
   }

}
