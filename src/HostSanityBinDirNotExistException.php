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
 * HostSanityBinDirNotExistException class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class HostSanityBinDirNotExistException extends RuntimeException {
   public function getBinDir() : string {
      return $this->binDir;
   }
   private $binDir;
   public function __construct(string $bin_dir) {
      $this->binDir = $bin_dir;
      parent::__construct("bin_dir does not exist: $bin_dir");
   }
}
