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
 * ConfigFileReaderTrait trait
 *
 * @author D. Bird <dougbird@katmore.com>
 */
trait ConfigFileReaderTrait {
   private $config = [];
   protected function getConfig() : array {
      return $this->config;
   }
   protected function setConfigFile(string $config_file=null) {
      if (is_file($config_file) && (is_array($config = require $config_file))) {
         $this->config = $config;
      }
   }
}
