<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\HostSanityResponse;
use Healthsvc\HostSanityStatusData;
use Healthsvc\ErrorInfoItem;
use Healthsvc\InfoItem;

class HostSanityResponseTest extends TestCase {
   
   public function failureStatusProvider() {
      $data = [];
      
      $status = new HostSanityStatusData;
      $status->setHealthFailure('some-test',new ErrorInfoItem('some error message'));
      
      $data []= [$status];
      
      return $data;
   }
   
   /**
    * @dataProvider failureStatusProvider
    */
   public function testStatusAnyFailureResponse(HostSanityStatusData $status) {
      $response = new HostSanityResponse($status);
      $this->assertEquals(HostSanityResponse::RESPONSE_CODE_HAS_FAILURE,$response->getResponseCode());
   }
   
   public function warningNoFailureStatusProvider() {
      $data = [];
      
      $status = new HostSanityStatusData;
      $status->setHealthWarn('some-test',new ErrorInfoItem('some warning message'));
      
      $data []= [$status];
      
      return $data;
   }
   
   /**
    * @dataProvider warningNoFailureStatusProvider
    */
   public function testStatusWarningNoFailureResponse(HostSanityStatusData $status) {
      $response = new HostSanityResponse($status);
      $this->assertEquals(HostSanityResponse::RESPONSE_CODE_HAS_WARN_NO_FAILURE,$response->getResponseCode());
   }
   
   public function allSuccessStatusProvider() {
      $data = [];
      
      $status = new HostSanityStatusData;
      $infoItem = new class extends InfoItem {
         public $message = 'some success message';
      };
      $status->setHealthSuccess('some-test',$infoItem);
      
      $data []= [$status];
      
      return $data;
   }
   
   /**
    * @dataProvider allSuccessStatusProvider
    */
   public function testStatusAllSuccessResponse(HostSanityStatusData $status) {
      $response = new HostSanityResponse($status);
      $this->assertEquals(HostSanityResponse::RESPONSE_CODE_ALL_SUCCESS,$response->getResponseCode());
   }
   
   
   
   
   
   
   
}