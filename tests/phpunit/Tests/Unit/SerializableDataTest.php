<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\SerializableData;

class SerializableDataTest extends TestCase {
   
   
   public function testNonSnakeCase() {
      $serializableData = new class extends SerializableData {
         
         const PROPERTIES_TO_SNAKE_CASE = false;
         
         public $someCamelCase = 'some camel case value';
         public $SomePascalCase = 'some pascal case value';
         
      };
      $data = $serializableData->toSerializedArray();
      $this->assertArrayHasKey('someCamelCase',$data);
      $this->assertArrayHasKey('SomePascalCase',$data);
   }
   
   public function testSerializableValues() {
      $serializableData = new class extends SerializableData {
         protected function getSerializableValues() : array {
            return ['some-train-case'=>'meep'];
         }
      };
      $data = $serializableData->toSerializedArray();
      $this->assertArrayHasKey('some-train-case',$data);
   }
   
}