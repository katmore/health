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
 * HostSanityConfig class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class HostSanityConfig extends ConfigController {

   const DEFAULT_BIN_DIR = __DIR__.'/../bin/host-sanity';

   public function getExec() : array {
      if (!is_array($exec = $this->getConfigVal('exec'))) {
         return [];
      }
      return $exec;
   }

   public function getWarnExitStatus() : array {
      if (!is_array($warnExitStatus = $this->getConfigVal('warn-exit-status'))) {
         return [];
      }
      return $warnExitStatus;
   }

   public function getBin() : array {
      if (!is_array($bin = $this->getConfigVal('bin'))) {
         return [];
      }
      return $bin;
   }

   public function getBinDir() : string {
      if (!is_string($binDir = $this->getConfigVal('bin_dir'))) {
         return static::DEFAULT_BIN_DIR;
      }
      return $binDir;
   }

}
