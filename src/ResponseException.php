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

use RuntimeException;

/**
 * ResponseException class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
abstract class ResponseException extends RuntimeException implements ResponseInterface {
   final public function printResponseBody(bool $send_headers=true) : void {
      if ($send_headers) {
         header("Content-type: ".$this->getContentType());
         http_response_code($this->getResponseCode());
      }
      echo $this->getResponseBody();
   }
}
