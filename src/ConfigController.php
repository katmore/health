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
 * ConfigController class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
abstract class ConfigController {

   /**
    *
    * @var array
    * @private
    */
   private $config;

   protected function getConfigVal(string $key) {
      if (!isset($this->config[$key])) return;
      return $this->config[$key];
   }

   final public function __construct(array $config=null) {
      $config===null && $config = [];
      $this->config = $config;
   }

}
