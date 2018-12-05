<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\CommandInfoItem;

class CommandInfoItemTest extends TestCase {
   
   public function nonEmptyValuesProvider() : array {
      $data = [];
      for($i=0;$i<5;$i++) {
         $data []= ["#$i fake stdout line1\nfake stdout line2"];
      }
      return $data;
   }
   
   /**
    * @dataProvider nonEmptyValuesProvider
    */
   public function testNonEmptyValues(string $stdout) {
      $commandErrorInfoItem = new CommandInfoItem($stdout);
      $this->assertEquals($stdout,implode("\n",$commandErrorInfoItem->getStdout()));
   }
   
   public function testEmptyStdout() {
      $commandErrorInfoItem = new CommandInfoItem("");
      $this->assertEquals([],$commandErrorInfoItem->getStdout());
   }
   
}