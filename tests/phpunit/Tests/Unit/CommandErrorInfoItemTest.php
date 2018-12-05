<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\CommandErrorInfoItem;

class CommandErrorInfoItemTest extends TestCase {
   
   public function nonEmptyValuesProvider() : array {
      $data = [];
      for($i=0;$i<5;$i++) {
         $data []= ["#$i fake stdout line1\nfake stdout line2","#$i fake stderr line1\nfake stderr line2"];
      }
      return $data;
   }
   
   /**
    * @dataProvider nonEmptyValuesProvider
    */
   public function testNonEmptyValues(string $stdout,string $stderr) {
      $commandErrorInfoItem = new CommandErrorInfoItem($stdout,$stderr);
      $this->assertEquals($stderr,implode("\n",$commandErrorInfoItem->getStderr()));
   }
   
   
   
}