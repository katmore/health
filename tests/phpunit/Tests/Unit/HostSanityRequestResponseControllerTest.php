<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\HostSanityRequestResponseController;
use Healthsvc\TestCase\ConfigFileTestTrait;
use Healthsvc\Response;

class HostSanityRequestResponseControllerTest extends TestCase {
   use ConfigFileTestTrait;
   
   /**
    * @dataProvider goodFileProvider
    */
   public function testGoodConfigFile(string $config_file) {
      $controller = new HostSanityRequestResponseController($config_file);
      $this->assertInstanceOf(Response::class,$controller->getResponse());
   }
   
   /**
    * @dataProvider goodFileProvider
    */
   public function testPrintResponseBody(string $config_file) {
      $controller = new HostSanityRequestResponseController($config_file);
      
      $this->expectOutputString($controller->getResponse()->getResponseBody());
      $controller->printResponseBody(false);
   }
   /**
    * @dataProvider goodFileProvider
    */
   public function testPrintResponseBodyWithBadRequestMethod(string $config_file) {
      
      $controller = new HostSanityRequestResponseController($config_file,'POST');
      
      $this->expectOutputString("the 'POST' method is not allowed for this resource");
      
      $controller->printResponseBody(false);
      
   }
}