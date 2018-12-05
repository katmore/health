<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\ConfigController;

class ConfigControllerTest extends TestCase {
   public function goodConfigProvider() : array {
      return [
         [[
            'bin'=>[
               'fake-bin'=>'fake-bin-script'
            ]
         ]],
         [[
            'exec'=>[
               'fake-exec'=>'fake-exec-command'
            ]
         ]],
      ];
   }
   
   /**
    * @dataProvider goodConfigProvider
    */
   public function testGoodConfig(array $config) {
      
      $configController = new class($config) extends ConfigController {
         public function getTestConfigVal(string $key) {
            return $this->getConfigVal($key);
         }
      };
      
      array_walk($config,function($val,$key) use(&$configController) {
         $this->assertEquals($val,$configController->getTestConfigVal($key));
      });
      
   }
   
   public function emptyConfigProvider() : array {
      return [
         [null],
         [[]],
      ];
   }
   
   /**
    * @dataProvider emptyConfigProvider
    */
   public function testEmptyConfig(array $config=null) {
      
      $configController = new class($config) extends ConfigController {
         public function getTestConfigVal(string $key) {
            return $this->getConfigVal($key);
         }
      };
      
      $this->assertNull($configController->getTestConfigVal('test'));
         
   }
   
   
}