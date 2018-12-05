<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Healthsvc\HostSanityStatusData;

class HostSanityStatusDataTest extends TestCase {
   
   public function hostnameProvider() {
      return [
         ['some-hostname']
      ];
   }
   
   /**
    * @dataProvider hostnameProvider
    */
   public function testHostname(string $hostname) {
      $data = new HostSanityStatusData(0,null,$hostname);
      $this->assertEquals($hostname,$data->getHostname());
   }
}