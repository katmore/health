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
 * CommandErrorInfoItem class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class CommandErrorInfoItem extends CommandInfoItem {
   protected $stderr;

   public function getStderr() : array {
      return $this->stderr;
   }

   public function __construct(string $stdout, string $stderr) {
      parent::__construct($stdout);
      $this->stderr = explode("\n", trim($stderr));
   }


}
