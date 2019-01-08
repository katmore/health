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
 * HostSanityResponse class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
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

      $this->setResponseData($status->toArray(), $responseCode);

   }

}
