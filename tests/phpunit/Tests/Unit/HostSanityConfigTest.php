<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\TestCase\HostSanityConfigTrait;
use Healthsvc\HostSanityConfig;

class HostSanityConfigTest extends TestCase {
   
   use HostSanityConfigTrait;
   
   
   
   /**
    * @dataProvider binAllSuccessConfigProvider
    */
   public function testGoodGetBin(array $config,HostSanityConfig $host_sanity_config) {
      $this->assertEquals($config['bin'],$host_sanity_config->getBin());
   }
   
   /**
    * @dataProvider emptyConfigProvider
    */
   public function testBadGetBin(HostSanityConfig $host_sanity_config) {
      $this->assertEquals([],$host_sanity_config->getBin());
   }
   
   /**
    * @dataProvider binDirConfigProvider
    */
   public function testGoodGetBinDir(array $config,HostSanityConfig $host_sanity_config) {
      $this->assertEquals($config['bin_dir'],$host_sanity_config->getBinDir());
   }
   
   /**
    * @dataProvider emptyConfigProvider
    */
   public function testBadGetBinDir(HostSanityConfig $host_sanity_config) {
      $this->assertEquals(HostSanityConfig::DEFAULT_BIN_DIR ,$host_sanity_config->getBinDir());
   }
   
   /**
    * @dataProvider execAllSuccessConfigProvider
    */
   public function testGoodGetExec(array $config,HostSanityConfig $host_sanity_config) {
      $this->assertEquals($config['exec'],$host_sanity_config->getExec());
   }
   
   /**
    * @dataProvider emptyConfigProvider
    */
   public function testBadGetExec(HostSanityConfig $host_sanity_config) {
      $this->assertEquals([],$host_sanity_config->getExec());
   }
   
   /**
    * @dataProvider execAllWarningConfigProvider
    */
   public function testGoodGetWarnExitStatus(array $config,HostSanityConfig $host_sanity_config) {
      $this->assertEquals($config['warn-exit-status'],$host_sanity_config->getWarnExitStatus());
   }
   
   /**
    * @dataProvider emptyConfigProvider
    */
   public function testBadGetWarnExitStatus(HostSanityConfig $host_sanity_config) {
      $this->assertEquals([],$host_sanity_config->getWarnExitStatus());
   }
   
   
   
   
   
   
   
   
}