<?php
declare(strict_types=1);
namespace Healthsvc\TestCase;

use Healthsvc\HostSanityConfig;

trait HostSanityConfigTrait {
   
   public function emptyConfigProvider() : array {
      return [[new HostSanityConfig]];
   }
   
   public function binDirConfigProvider() : array {
      $config = [];
      $config['bin_dir'] = __DIR__;
      return [[$config,new HostSanityConfig($config)]];
   }
   
   public function binAllSuccessConfigProvider() : array {
      $config = [];
      $config['bin']['tmp-space'] = 'free-space-check --min-percent-free=0 /tmp';
      
      return [[$config,new HostSanityConfig($config)]];
   }
   
   public function binAllFailureConfigProvider() : array {
      $config = [];
      $config['bin']['system-timezone'] = 'timezone-check Fake/Timezone';
      
      return [[$config,new HostSanityConfig($config)]];
   }
   
   public function binAllWarningScalarConfigProvider() : array {
      $config = [];
      $config['bin']['system-timezone'] = 'timezone-check Fake/Timezone';
      $config['warn-exit-status']['system-timezone'] = 3;
      return [[$config,new HostSanityConfig($config)]];
   }
   
   public function binAllWarningArrayConfigProvider() : array {
      $config = [];
      $config['bin']['system-timezone'] = 'timezone-check Fake/Timezone';
      $config['warn-exit-status']['system-timezone'] = [3];
      return [[$config,new HostSanityConfig($config)]];
   }
   
   public function execAllSuccessConfigProvider() : array {
      $config = [];
      
      $config['exec']['echo-test'] = 'echo hello';
      
      return [[$config,new HostSanityConfig($config)]];
   }
   
   public function execAllFailureConfigProvider() : array {
      $config = [];
      
      $config['exec']['echo-test'] = '>&2 echo failure; exit 3';
      
      return [[$config,new HostSanityConfig($config)]];
   }
   
   public function execAllWarningConfigProvider() : array {
      $config = [];
      
      $config['exec']['echo-test'] = '>&2 echo failure; exit 3';
      $config['warn-exit-status']['system-timezone'] = [3];
      
      return [[$config,new HostSanityConfig($config)]];
   }
   
   
   
   
   
}