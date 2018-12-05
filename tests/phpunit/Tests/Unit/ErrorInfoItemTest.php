<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\ErrorInfoItem;

class ErrorInfoItemTest extends TestCase {
   
   public function constructorArgProvider() : array {
      $data = [];
      for($i=0;$i<5;$i++) {
         $data []= ["#$i ".ErrorInfoItem::class." message",];
      }
      return $data;
   }
   
   /**
    * @dataProvider constructorArgProvider
    */
   public function testInstantiate(string $message) {
      $errorInfoItem = new ErrorInfoItem($message);
      $this->assertEquals($message,$errorInfoItem->getMessage());
   }
   
   
   
}