<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\ConfigFileReaderTrait;
use Healthsvc\TestCase\ConfigFileTestTrait;

class ConfigFileReaderTraitTest extends TestCase {
   
   use ConfigFileTestTrait;
   
   /**
    * @dataProvider goodFileProvider
    */
   public function testReadGoodFile(string $config_file,array $config) {
      
      
      $configFileReader = new class($config_file) {
         use ConfigFileReaderTrait;
         public function getTraitConfig() : array {
            return $this->getConfig();
         }
         public function __construct(string $config_file=null) {
            $this->setConfigFile($config_file);
         }
      };
      
      $this->assertEquals($config,$configFileReader->getTraitConfig());
      
      
      
      
      
      
   }
   
}