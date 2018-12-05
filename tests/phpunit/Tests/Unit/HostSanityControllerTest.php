<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\HostSanityController;
use Healthsvc\StatusData;
use Healthsvc\TestCase\HostSanityConfigTrait;
use Healthsvc\HostSanityConfig;
use Healthsvc\HostSanityBinDirNotExistException;

class HostSanityControllerTest extends TestCase {
   
   use HostSanityConfigTrait;
   
   public function testEmptyConstructorArgs() {
      $hostSanityController = new HostSanityController([],[],[],"");
      $this->assertInstanceOf(StatusData::class,$hostSanityController->getStatusData());
   }
   
   public function binAllSuccessProvider() : array {
      $config = [];
      $config['bin']['tmp-space'] = 'free-space-check --min-percent-free=0 /tmp';
      
      return [[$config['bin']]];
   }
   
   /**
    * @dataProvider binAllSuccessProvider
    */
   public function testBinAllSuccess(array $bin) {
      $hostSanityController = new HostSanityController([],[],$bin,HostSanityConfig::DEFAULT_BIN_DIR);
      $this->assertTrue($hostSanityController->getStatusData()->hasAllHealthSuccess());
   }
   
   /**
    * @dataProvider binAllSuccessProvider
    */
   public function testBadBinDir(array $bin) {
      $this->expectException(HostSanityBinDirNotExistException::class);
      new HostSanityController([],[],$bin,__DIR__.'/bad-dir');
   }
   
   public function binAllFailureProvider() : array {
      $config = [];
      $config['bin']['system-timezone'] = 'timezone-check Fake/Timezone';
      
      return [[$config['bin']]];
   }
   
   /**
    * @dataProvider binAllFailureProvider
    */
   public function testBinAllFailure(array $bin) {
      $hostSanityController = new HostSanityController([],[],$bin,HostSanityConfig::DEFAULT_BIN_DIR);
      $this->assertTrue($hostSanityController->getStatusData()->hasAnyHealthFailure());
   }
   
   public function execSuccessWithStderrProvider() : array {
      $config = [];
      
      $config['exec']['echo-test'] = '>&2 echo hello';
      
      return [[$config['exec'],'echo-test']];
   }
   
   /**
    * @dataProvider execSuccessWithStderrProvider
    */
   public function testExecSuccessWithStderr(array $exec,string $label) {
      $hostSanityController = new HostSanityController($exec,[],[],HostSanityConfig::DEFAULT_BIN_DIR);
      $healthInfo = $hostSanityController->getStatusData()->getHealthInfo();
      $this->assertArrayHasKey($label,$healthInfo);
   }
   
   public function execFailureWithStdoutProvider() : array {
      $config = [];
      
      $config['exec']['echo-test'] = 'echo hello; exit 1';
      
      return [[$config['exec']]];
   }
   
   /**
    * @dataProvider execFailureWithStdoutProvider
    */
   public function testExecFailureWithStdout(array $exec) {
      $hostSanityController = new HostSanityController($exec,[],[],HostSanityConfig::DEFAULT_BIN_DIR);
      $this->assertTrue($hostSanityController->getStatusData()->hasAnyHealthFailure());
   }
   
   public function execFailureWithoutOutputProvider() : array {
      $config = [];
      
      $config['exec']['echo-test'] = 'exit 1';
      
      return [[$config['exec']]];
   }
   
   /**
    * @dataProvider execFailureWithoutOutputProvider
    */
   public function testExecFailureWithoutOutput(array $exec) {
      $hostSanityController = new HostSanityController($exec,[],[],HostSanityConfig::DEFAULT_BIN_DIR);
      $this->assertTrue($hostSanityController->getStatusData()->hasAnyHealthFailure());
   }
   
   public function execAllWarningProvider() : array {
      $config = [];
      
      $config['exec']['echo-test'] = '>&2 echo failure; exit 3';
      $config['warn-exit-status']['echo-test'] = [3];
      
      return [[$config['exec'],$config['warn-exit-status']]];
   }
   
   /**
    * @dataProvider execAllWarningProvider
    */
   public function testExecAllWarning(array $exec,array $warn_exit_status) {
      $hostSanityController = new HostSanityController($exec,$warn_exit_status,[],HostSanityConfig::DEFAULT_BIN_DIR);
      $this->assertFalse($hostSanityController->getStatusData()->hasAnyHealthFailure());
      $this->assertTrue($hostSanityController->getStatusData()->hasAnyHealthWarn());
   }
   
   public function testHostSanityBinDirNotExistException() {
      $e = new HostSanityBinDirNotExistException(__DIR__);
      $this->assertEquals(__DIR__,$e->getBinDir());
      
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
}