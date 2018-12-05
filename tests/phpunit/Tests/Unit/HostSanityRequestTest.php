<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\HostSanityRequest;

class HostSanityRequestTest extends TestCase {
   
   public function allowedRequestMethodsProvider() : array {
      $data = [];
      
      $allowedMethods = HostSanityRequest::ALLOWED_METHODS;
      
      array_walk($allowedMethods,function(string $request_method) use(&$data) {
         $data []= [$request_method];
      });
      
      return $data;
   }
   
   /**
    * @dataProvider allowedRequestMethodsProvider
    */
   public function testAllowedMethods(string $request_method) {
      
      $request = new HostSanityRequest($request_method);
      
      $this->assertTrue($request->isRequestMethodAllowed());
      
   }
   
}