<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\RequestBodyParserTrait;

class RequestBodyParserTraitTest extends TestCase {
   
   public function requestBodyProvider() : array {
      $data = [];
      
      $jsonRequestData = ['some-property'=>'some-value'];
      
      $data []= [json_encode($jsonRequestData),'application/json',$jsonRequestData];
      
      $urlEncodedData = ['some-property'=>'some-value'];
      
      $data []= [http_build_query($urlEncodedData),'application/x-www-form-urlencoded',$urlEncodedData];
      
      
      return $data;
   }
   
   /**
    * @dataProvider requestBodyProvider
    * @group 
    */
   public function testRequestBody(string $request_body,string $content_type, array $request_data) {
      $parser = new class($request_body,$content_type) {
         use RequestBodyParserTrait;
         public function __construct(string $request_body=null,string $content_type=null)  {
            $this->setRequestBody($request_body,$content_type);
         }
         public function getTraitRequestData(): array {
            return $this->getRequestData();
         }
      };
      $this->assertEquals($request_body,$parser->getRequestBody());
      $this->assertEquals($content_type,$parser->getContentType());
      $this->assertEquals($request_data,$parser->getTraitRequestData());
   }
   
}