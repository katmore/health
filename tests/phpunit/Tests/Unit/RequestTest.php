<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\Request;
use Healthsvc\RequestMethodNotAllowedException;

class RequestTest extends TestCase {
   
   public function testExceptionOnNotAllowedMethod() {
      $this->expectException(RequestMethodNotAllowedException::class);
      new class() extends Request {
         public function isRequestMethodAllowed() : bool {
            return false;
         }
      };
   }
   
   public function requestQueryProvider() : array {
      return [
         [['some'=>'queryval']]
      ];
   }
   /**
    * @dataProvider requestQueryProvider
    */
   public function testRequestQuery(array $request_query) {
      $request = new class(null,$request_query) extends Request {
         public function isRequestMethodAllowed() : bool {
            return true;
         }
      };
      $this->assertEquals($request_query,$request->getRequestQuery());
   }
  
   
   
   
   
   
}