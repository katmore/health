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
 * RequestResponseController class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
abstract class RequestResponseController implements ResponseBodyPrinterInterface {
   use ConfigFileReaderTrait;
   public function __construct(string $config_file=null) {
      $this->setConfigFile($config_file);
   }
   abstract public function getRequest() : Request;
   abstract public function getResponse() : Response;
}
