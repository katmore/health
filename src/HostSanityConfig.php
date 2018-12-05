<?php
namespace Healthsvc;

class HostSanityConfig extends ConfigController {
   
   const DEFAULT_BIN_DIR = __DIR__.'/../bin/sanity';
   
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