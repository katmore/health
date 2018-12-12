<?php
declare(strict_types=1);
namespace Healthsvc\Tests\Unit;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ConnectException;
use Healthsvc\TestCase\WebserviceTestTrait;
use Healthsvc\TestCase\ResponseConfigInfo;

class HostSanityWebserviceTest extends TestCase {
   
   use WebserviceTestTrait;
   
   const DEFAULT_BASE_URI = 'http://localhost:8000';
   const ENDPOINT_URI = 'host-sanity.php';
   
   const CONFIG_DIR = __DIR__.'/../../../../config';
   const CONFIG_FILE_BASENAME = 'host-sanity.php';
   
   /**
    * @var string
    */
   protected static $missingDep;
   /**
    * @var bool
    */
   protected static $initDepPassed = false;
   /**
    * @var \GuzzleHttp\Client
    */
   protected static $client;
   
   protected function getExecptedHostname() : string {
      if (isset($_ENV['WEBSERVICE_HOSTNAME'])) {
         return $_ENV['WEBSERVICE_HOSTNAME'];
      }
      if (false===($hostname = gethostname())) {
         $this->markMissingDep("gethostname() failed");
      }
      return $hostname;
   }
   
   protected static function getDefaultBaseUri() : string {
      return static::DEFAULT_BASE_URI;
   }
   
   protected static function getEndpointUri() : string {
      return static::ENDPOINT_URI;
   }
   
   /**
    * @throws \PHPUnit\Framework\SkippedTestError
    */
   protected function markMissingDep(string $message) : void {
      static::$missingDep = $message;
      $this->markTestSkipped($message);
   }
   
   protected static function getHostSanityConfigPath() : string {
      return static::CONFIG_DIR.'/'.static::CONFIG_FILE_BASENAME;
   }
   
   public function setUp() {
      if (is_string(static::$missingDep)) {
         $this->markTestSkipped(static::$missingDep);
      }
      if (static::$initDepPassed!==true) {
         if (!is_dir(static::CONFIG_DIR)) {
            $this->markMissingDep("CONFIG_DIR '".static::CONFIG_DIR."' is not a directory");
         }
         $hostSantiyConfig = static::getHostSanityConfigPath();
         if (is_file($hostSantiyConfig)) {
            $hostSanityConfigMd5 = md5_file($hostSantiyConfig);
            $hostSanityConfigBackup = static::CONFIG_DIR.'/'.pathinfo($hostSantiyConfig,PATHINFO_FILENAME).'-'.$hostSanityConfigMd5.'-'.basename(str_replace('\\','/',__CLASS__)).'-BACKUP.php';
            if (!is_file($hostSanityConfigBackup)) {
               if (!copy($hostSantiyConfig,$hostSanityConfigBackup)) {
                  $this->markMissingDep("failed to create config backup: $hostSanityConfigBackup",E_USER_ERROR);
               }
            }
            register_shutdown_function(function() use($hostSanityConfigBackup)
            {
               $hostSantiyConfig = static::getHostSanityConfigPath();
               if (!copy($hostSanityConfigBackup,$hostSantiyConfig)) {
                  trigger_error("failed to restore config backup: ".$hostSanityConfigBackup,E_USER_ERROR);
               }
            });
            if (!unlink($hostSantiyConfig)) {
               $this->markMissingDep("failed to delete existing config: $hostSantiyConfig",E_USER_ERROR);
            }
         }
         $output = $exitStatus = null;
         $lastLine = exec('echo "hello"',$output,$exitStatus);
         if (($lastLine!=='hello') && $exitStatus!==0) {
            $this->markMissingDep("system 'echo' command did not work as expected");
         }
         static::$initDepPassed=true;
      }
   }
   
   protected static function getGuzzleClient() : Client {
      return new Client(['base_uri' => static::getBaseUri(),]);
   }
   
   protected function writeConfig(array $config) : void {
      if (!file_put_contents(static::getHostSanityConfigPath(),"<?php\nreturn ".var_export($config,true).';')) {
         $this->markMissingDep("unable to create config: ".static::getHostSanityConfigPath());
      }
      $configReq = require static::getHostSanityConfigPath();
      if (!is_array($configReq)) {
         $this->markMissingDep("invalid config, expected array return in: ".static::getHostSanityConfigPath());
      }
      if (md5(json_encode($config)) !== md5(json_encode($configReq))) {
         $this->markMissingDep("invalid config, execpted array value mismatch in: ".static::getHostSanityConfigPath());
      }
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    */
   public function testSuccessResponseReturnedWhenAllTestsAreSuccess() : ResponseConfigInfo {
      $execpted_stdout = 'hello';
      $config = [
         'exec'=>[
            'my-test'=>'echo "hello"'
         ]
      ];
      $test_label = 'my-test';
      $client = static::getGuzzleClient();
      $this->writeConfig($config);
      
      try {
         $response = $client->get(static::getEndpointUri());
      } catch (ServerException $e) {
         $response = $e->getResponse();
      } catch (ConnectException $e) {
         $this->markMissingDep('Guzzle ConnectException: '.$e->getMessage());
      }
      
      $this->assertEquals(200,$response->getStatusCode());
      
      return new ResponseConfigInfo($response,$config,[
         'execpted_stdout'=>$execpted_stdout,
         'test_label'=>$test_label,
      ]);
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testSuccessResponseReturnedWhenAllTestsAreSuccess
    */
   public function testSuccessResponseHasJsonContentType(ResponseConfigInfo $response_info) : string {
      $response = $response_info->getResponse();
      $contentType = $response->getHeader('Content-type');
      if (count($contentType)) {
         $contentType = array_pop($contentType);
      }
      $this->assertEquals('application/json',$contentType);
      return $response->getBody()->getContents();
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testSuccessResponseHasJsonContentType
    * @return array response data as assoc array
    */
   public function testSuccessResponseBodyIsJsonObject(string $response_body) : array {
      $this->assertInstanceOf('stdClass',json_decode($response_body));
      return json_decode($response_body,true);
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testSuccessResponseBodyIsJsonObject
    * @return array health_success tests that were successful
    */
   public function testSuccessResponseDataIsHostSanityStatusData(array $response_data) : array {
      $this->assertArrayHasKey('health_success',$response_data);
      $this->assertInternalType('array',$response_data['health_success']);
      return $response_data['health_success'];
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testSuccessResponseDataIsHostSanityStatusData
    * @depends testSuccessResponseReturnedWhenAllTestsAreSuccess
    * @return string successful test label
    */
   public function testSuccessResponseHasSuccessTest(array $health_success,ResponseConfigInfo $response_info) : string {
      if (null===($test_label = $response_info->getInfoItem('test_label'))) {
         $this->markMissingDep('missing infoItem: test_label');
      }
      $this->assertContains($test_label,$health_success);
      return $test_label;
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testSuccessResponseBodyIsJsonObject
    */
   public function testSuccessResponseHostnameMatchesExpectedHostname(array $response_data) {
      $this->assertArrayHasKey('hostname',$response_data);
      $this->assertEquals($this->getExecptedHostname(),$response_data['hostname']);
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testSuccessResponseBodyIsJsonObject
    * @depends testSuccessResponseReturnedWhenAllTestsAreSuccess
    * @return array assoc array of test's health_info object
    */
   public function testSuccessResponseHasTestInfoItem(array $response_data,ResponseConfigInfo $response_info) : array {
      if (null===($test_label = $response_info->getInfoItem('test_label'))) {
         $this->markMissingDep('missing infoItem: test_label');
      }
      $this->assertArrayHasKey('health_info',$response_data);
      $this->assertArrayHasKey($test_label,$response_data['health_info']);
      return $response_data['health_info'][$test_label];
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testSuccessResponseReturnedWhenAllTestsAreSuccess
    * @depends testSuccessResponseHasTestInfoItem
    */
   public function testSuccessResponseTestStdOutMatchesExpectedOutput(ResponseConfigInfo $response_info,array $test_health_info) {
      if (null===($execpted_stdout = $response_info->getInfoItem('execpted_stdout'))) {
         $this->markMissingDep('missing infoItem: execpted_stdout');
      }
      $this->assertArrayHasKey('stdout',$test_health_info);
      $this->assertInternalType('array',$test_health_info['stdout']);
      $actualOutput = implode("\n",$test_health_info['stdout']);
      $this->assertEquals($execpted_stdout,$actualOutput);
   }

   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    */
   public function testFailureResponseReturnedWhenAllTestsAreFailure() : ResponseConfigInfo {
      $expected_stderr = 'error';
      $config = [
         'exec'=>[
            'my-test'=>'>&2 echo "error"; exit 1'
         ]
      ];
      $test_label = 'my-test';
      $client = static::getGuzzleClient();
      $this->writeConfig($config);
      
      try {
         $response = $client->get(static::getEndpointUri());
      } catch (ServerException $e) {
         $response = $e->getResponse();
      }
      
      $this->assertEquals(500,$response->getStatusCode());
      
      return new ResponseConfigInfo($response,$config,[
         'expected_stderr'=>$expected_stderr,
         'test_label'=>$test_label,
      ]);
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testFailureResponseReturnedWhenAllTestsAreFailure
    */
   public function testFailureResponseHasJsonContentType(ResponseConfigInfo $response_info) : string {
      $response = $response_info->getResponse();
      $contentType = $response->getHeader('Content-type');
      if (count($contentType)) {
         $contentType = array_pop($contentType);
      }
      $this->assertEquals('application/json',$contentType);
      return $response->getBody()->getContents();
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testFailureResponseHasJsonContentType
    * @return array response data as assoc array
    */
   public function testFailureResponseBodyIsJsonObject(string $response_body) : array {
      $this->assertInstanceOf('stdClass',json_decode($response_body));
      return json_decode($response_body,true);
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testFailureResponseBodyIsJsonObject
    * @return array health_failure tests that were failed
    */
   public function testFailureResponseDataIsHostSanityStatusData(array $response_data) : array {
      $this->assertArrayHasKey('health_failure',$response_data);
      $this->assertInternalType('array',$response_data['health_failure']);
      return $response_data['health_failure'];
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testFailureResponseDataIsHostSanityStatusData
    * @depends testFailureResponseReturnedWhenAllTestsAreFailure
    * @return array assoc array of test's health_fail object
    */
   public function testFailureResponseHasFailureTest(array $health_failure,ResponseConfigInfo $response_info) : array {
      if (null===($test_label = $response_info->getInfoItem('test_label'))) {
         $this->markMissingDep('missing infoItem: test_label');
      }
      $this->assertArrayHasKey($test_label,$health_failure);
      $this->assertInternalType('array',$health_failure[$test_label]);
      return $health_failure[$test_label];
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testFailureResponseBodyIsJsonObject
    */
   public function testFailureResponseHostnameMatchesExpectedHostname(array $response_data) {
      $this->assertArrayHasKey('hostname',$response_data);
      $this->assertEquals($this->getExecptedHostname(),$response_data['hostname']);
   }
   
   /**
    * @group functional
    * @group host-sanity
    * @group webservice
    * @depends testFailureResponseReturnedWhenAllTestsAreFailure
    * @depends testFailureResponseHasFailureTest
    */
   public function testFailureResponseTeststderrMatchesExpectedOutput(ResponseConfigInfo $response_info,array $test_health_failure) {
      if (null===($expected_stderr = $response_info->getInfoItem('expected_stderr'))) {
         $this->markMissingDep('missing infoItem: expected_stderr');
      }
      $this->assertArrayHasKey('stderr',$test_health_failure);
      $this->assertInternalType('array',$test_health_failure['stderr']);
      $actualOutput = implode("\n",$test_health_failure['stderr']);
      $this->assertEquals($expected_stderr,$actualOutput);
   }
   
   
   
   
   
   
   
   
}