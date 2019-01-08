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
 * ResponseInterface interface
 *
 * @author D. Bird <dougbird@katmore.com>
 */
interface ResponseInterface extends ResponseBodyPrinterInterface {
   public function getResponseCode() : int;
   public function getContentType() : string;
   public function getResponseBody() : string;
}
