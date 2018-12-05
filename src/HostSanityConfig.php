<?php
namespace Healthsvc;

class HostSanityConfig extends ConfigController {
   
   public function getExec() : array {
      if (!is_array($exec = $this->getRequestConfigVal('exec'))) {
         return [];
      }
      return $exec;
   }
   
   public function getWarnExitStatus() : array {
      if (!is_array($warnExitStatus = $this->getRequestConfigVal('warn-exit-status'))) {
         return [];
      }
      return $warnExitStatus;
   }
   
   public function getBin() : array {
      if (!is_array($bin = $this->getRequestConfigVal('bin'))) {
         return [];
      }
      return $bin;
   }
   const DEFAULT_BIN_DIR = __DIR__.'/../bin/sanity';
   public function getBinDir() : string {
      if (!is_string($binDir = $this->getRequestConfigVal('bin_dir'))) {
         return static::DEFAULT_BIN_DIR;
      }
      return $binDir;
   }
   
}