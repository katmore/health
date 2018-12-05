<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\StatusData;
use Healthsvc\ErrorInfoItem;
use Healthsvc\InfoItem;

class StatusDataTest extends TestCase {
   
   public function allSuccessProvider() : array {
      $data = [];
      
      $data []= ['some-test'];
      
      return $data;
   }
   
   /**
    * @dataProvider allSuccessProvider
    */
   public function testAllSuccess(string $label) {
      $status = new class extends StatusData {};
      $status->setHealthSuccess($label);
      $this->assertEquals([$label],$status->getHealthSuccess());
      $this->assertEquals('total success',$status->getMessage());
      $this->assertFalse($status->hasHealthFailure($label));
      $this->assertFalse($status->hasExecExitStatus($label));
   }
   
   public function allWarnProvider() : array {
      $data = [];
      
      $data []= ['some-test',new ErrorInfoItem('some warning message'), 3];
      
      return $data;
   }
   
   /**
    * @dataProvider allWarnProvider
    */
   public function testAllWarn(string $label,InfoItem $health_warn,int $exit_status) {
      $status = new class extends StatusData {};
      $status->setHealthWarn($label,$health_warn);
      $status->setExecExitStatus($label,$exit_status);
      $this->assertEquals([$label=>$health_warn],$status->getHealthWarn());
      $this->assertEquals($exit_status,$status->getExecExitStatus()[$label]);
      $this->assertTrue($status->hasExecExitStatus($label));
   }
   
   public function allFailureProvider() : array {
      $data = [];
      
      $data []= ['some-test',new ErrorInfoItem('some fail message')];
      
      return $data;
   }
   
   /**
    * @dataProvider allFailureProvider
    */
   public function testAllFailure(string $label,InfoItem $health_failure) {
      $status = new class extends StatusData {};
      $status->setHealthFailure($label,$health_failure);
      $this->assertEquals([$label=>$health_failure],$status->getHealthFailure());
   }
   
   public function testMoveNonExistingHealthFailure() {
      $status = new class extends StatusData {};
      $this->assertFalse($status->moveHealthFailureToWarn('non-existing-label'));
   }
   
   public function healthStatusTimeProvider() : array {
      return [
         [date('c')],
         [date('c',strtotime('+1 YEAR'))],
      ];
   }
   
   /**
    * @dataProvider healthStatusTimeProvider
    */
   public function testHealthStatusTime(string $health_status_time) {
      $status = new class(0,$health_status_time) extends StatusData {};
      $this->assertEquals($health_status_time,$status->getHealthStatusTime());
   }
   
   public function healthStatusTtlProvider() : array {
      return [
         [0],
         [300],
      ];
   }
   
   /**
    * @dataProvider healthStatusTtlProvider
    */
   public function testHealthStatusTtl(int $health_status_ttl) {
      
      $status = new class($health_status_ttl) extends StatusData {};
      $this->assertEquals($health_status_ttl,$status->getHealthStatusTtl());
      
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
}