<?php
namespace Healthsvc;

use RuntimeException;

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