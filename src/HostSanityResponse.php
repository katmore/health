<?php
namespace Healthsvc;

class HostSanityResponse extends Response {

   const RESPONSE_CODE_HAS_WARN_NO_FAILURE = 200;
   const RESPONSE_CODE_HAS_FAILURE = 500;
   const RESPONSE_CODE_HAS_NO_TESTS = 500;
   const RESPONSE_CODE_ALL_SUCCESS = 200;
   public function __construct(HostSanityStatusData $status) {
      
      if (!$status->hasAnyTest()) {
         $responseCode = static::RESPONSE_CODE_HAS_NO_TESTS;
      } else if ($status->hasAnyHealthFailure()) {
         $responseCode = static::RESPONSE_CODE_HAS_FAILURE;
      } else if ($status->hasAnyHealthWarn()) {
         $responseCode = static::RESPONSE_CODE_HAS_WARN_NO_FAILURE;
      } else {
         $responseCode = static::RESPONSE_CODE_ALL_SUCCESS;
      }
      
      $this->setResponseData($status->toArray(),$responseCode);
      
   }
   
}