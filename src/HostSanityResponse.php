<?php
namespace Healthsvc;

class HostSanityResponse extends Response {

   const RESPONSE_CODE_HAS_WARN = 200;
   const RESPONSE_CODE_HAS_FAILURE = 500;
   const RESPONSE_CODE_HAS_NO_TESTS = 500;
   const RESPONSE_CODE_FALLBACK = 200;
   public function __construct(HostSanityStatusData $status) {
      
      if ($status->hasNoTests()) {
         $responseCode = static::RESPONSE_CODE_HAS_NO_TESTS;
      } else if ($status->hasAnyHealthFailure()) {
         $responseCode = static::RESPONSE_CODE_HAS_FAILURE;
      } else if ($status->hasAnyHealthWarn()) {
         $responseCode = static::RESPONSE_CODE_HAS_WARN;
      } else {
         $responseCode = static::RESPONSE_CODE_FALLBACK;
      }
      
      $this->setResponseData($status->toArray(),$responseCode);
      
   }
   
}