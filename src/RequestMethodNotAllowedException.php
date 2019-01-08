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
 * RequestMethodNotAllowedException class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class RequestMethodNotAllowedException extends ResponseException {

   /**
    *
    * @var string request method
    */
   private $requestMethod;

   const RESPONSE_CODE = 405;
   const CONTENT_TYPE = 'text/plain';

   public function getResponseCode(): int {
      return static::RESPONSE_CODE;
   }

   public function getContentType(): string {
      return static::CONTENT_TYPE;
   }

   public function getResponseBody(): string {
      return $this->getMessage();
   }

   public function getRequestMethod() : string {
      return $this->requestMethod;
   }

   public function __construct(string $request_method) {
      $this->requestMethod = $request_method;
      parent::__construct("the '{$this->requestMethod}' method is not allowed for this resource");
   }


}
