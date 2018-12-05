<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\RequestMethodNotAllowedException;

class RequestMethodNotAllowedExceptionTest extends TestCase {

   public function requestMethodProvider() : array {
      return [
         ['GET'],
         ['POST'],
         ['PUT']
      ];
   }
   /**
    * @dataProvider requestMethodProvider
    */
   public function testRequestMethod(string $request_method) {
      $e = new RequestMethodNotAllowedException($request_method);
      $this->assertEquals($request_method,$e->getRequestMethod());
   }
   
   public function contentTypeProvider() : array {
      return [ 
         ['text/plain','GET'],
         ['text/plain','POST'],
         ['text/plain','PUT'],
      ];
   }
   /**
    * @dataProvider contentTypeProvider
    */
   public function testContentType(string $content_type,string $request_method) {
      $e = new RequestMethodNotAllowedException($request_method);
      $this->assertEquals($content_type,$e->getContentType());
   }
   
   public function responseCodeProvider() : array {
      return [
         [405,'GET'],
         [405,'POST'],
         [405,'PUT'],
      ];
   }
   /**
    * @dataProvider responseCodeProvider
    */
   public function testResponseCode(int $response_code,string $request_method) {
      $e = new RequestMethodNotAllowedException($request_method);
      $this->assertEquals($response_code,$e->getResponseCode());
   }
   
   
   
   
   
   
   

}