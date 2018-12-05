<?php
declare(strict_types=1);
namespace Healthsvc\TestCase;

trait ConfigFileTestTrait {
   /**
    * @afterClass
    */
   public static function tearDownConfigFiles() {
      array_walk(static::$configFile,function(string $configFile) {
         if (is_file($configFile) && is_writable($configFile)) {
            unlink($configFile);
         }
      });
         static::$configFile = [];
   }
   
   private static $configFile = [];
   
   public function goodFileProvider() : array {
      $data = [];
      
      if (false===($configFile = tempnam(sys_get_temp_dir(),'phpunit-healthsvc-'))) {
         trigger_error('failed to create temp config file',E_USER_ERROR);
      }
      
      static::$configFile []= $configFile;
      
      $config = [];
      $config['key-having-string'] = 'some string value';
      $config['key-having-array'] = ['some','array','value'];
      $config['key-having-object'] = (object) ['someObjectProp1'=>'some value 1','someObjectProp2'=>'some value 2'];
      $config = json_decode(json_encode($config),true);
      if (false===file_put_contents($configFile,"<?php\nreturn ".var_export($config,true).';')) {
         trigger_error('failed to write temp config file',E_USER_ERROR);
      }
      
      $data []= [$configFile,$config];
      
      return $data;
   }
}