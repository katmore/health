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
 * CommandInfoItem class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class CommandInfoItem extends InfoItem {
   protected $stdout;

   public function getStdout() : array {
      return $this->stdout;
   }

   public function __construct(string $stdout) {
      if (empty($stdout)) {
         $this->stdout = [];
         return;
      }
      $this->stdout = explode("\n", trim($stdout));;
   }


}
