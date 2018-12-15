<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\Response;

use Healthsvc\ResponseDataInvalidException;
use Healthsvc\ResponseException;

class ResponseTest extends TestCase {
   
   
   public function responseDataProvider() : array {
      return [
         [ ['some-response1'=>'value 1'], 200 ],
         [ ['some-response2'=>'value 2'], 500 ],
      ];
   }
   
   /**
    * @dataProvider responseDataProvider
    */
   public function testResponseData(array $response_data, int $response_code) {
      $response = new class($response_data,$response_code) extends Response {
         public function __construct(array $response_data, int $response_code) {
            $this->setResponseData($response_data,$response_code);
         }
      };
      $this->assertTrue($response->hasResponseData());
      $this->assertEquals($response_data,$response->getResponseData());
      $this->assertEquals($response_code,$response->getResponseCode());
      $this->assertEquals('application/json',$response->getContentType());
   }
   
   public function prettyBodyProvider() : array {
      $data = [];
      
      $responseData = array (
         'hostname' => 'my-host',
         'exec_exit_status' =>
         array (
         ),
         'health_status_time' => '2018-12-14T19:19:12-08:00',
         'health_status_ttl' => 0,
         'message' => 'total success',
         'health_info' =>
         array (
            'sample-test' =>
            array (
               'stdout' =>
               array (
                  0 => 'sample test',
               ),
            ),
         ),
         'health_success' =>
         array (
            0 => 'sample-test',
         ),
         'health_warn' =>
         array (
         ),
         'health_failure' =>
         array (
         ),
      );
      
      $data []= [$responseData,json_encode($responseData,JSON_PRETTY_PRINT)];
      
      return $data;
   }
   
   /**
    * @dataProvider prettyBodyProvider
    * @depends testResponseData
    */
   public function testGetResponseBodyIsPrettyWhenPrettyFormatIsTrue(array $response_data, string $pretty_response_body) {
      $response = new class($response_data) extends Response {
         public function __construct(array $response_data) {
            $this->setResponseData($response_data);
         }
      };
      $this->assertEquals($pretty_response_body,$response->getResponseBody(true));
   }
   
   public function testInvalidResponseData() {
      $this->expectException(ResponseDataInvalidException::class);
      new class() extends Response {
         public function __construct() {
            $this->setResponseData([
               random_bytes(200)=>'poop'
            ],200);
         }
      };
   }
   
   /**
    * @dataProvider responseDataProvider
    * @runInSeparateProcess
    */
   public function testSendHeaders(array $response_data, int $response_code) {
      $response = new class($response_data,$response_code) extends Response {
         public function __construct(array $response_data, int $response_code) {
            $this->setResponseData($response_data,$response_code);
         }
      };
      $this->expectOutputString($response->getResponseBody());
      $response->printResponseBody(true);
      $this->assertContains('Content-type: application/json',xdebug_get_headers());
      $this->assertEquals($response_code,http_response_code());
      //var_dump(xdebug_get_headers());
      $this->assertTrue($response->hasResponseData());
   }
   
   public function invalidResponseDataReasonProvider() : array {
      return [
         ['some reason'],
      ];
   }
   
   /**
    * @dataProvider invalidResponseDataReasonProvider
    */
   public function testResponseDataInvalidException(string $reason) {
      $e = new ResponseDataInvalidException($reason);
      $this->assertEquals($reason,$e->getReason());
   }
   
   /**
    * @dataProvider responseDataProvider
    * @runInSeparateProcess
    */
   public function testResponseException() {
      $e = new class() extends ResponseException {
         public function getResponseCode(): int {
            return 500;
         }
      
         public function getContentType(): string {
            return 'text/plain';
         }
      
         public function getResponseBody(): string {
            return 'some error';
         }
      };
      
      $this->expectOutputString($e->getResponseBody());
      $e->printResponseBody(true);
      
      //var_dump(xdebug_get_headers());
      $this->assertContains('Content-type: text/plain;charset=UTF-8',xdebug_get_headers());
      $this->assertEquals(500,http_response_code());
   }
   
}