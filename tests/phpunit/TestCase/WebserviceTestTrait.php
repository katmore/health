<?php
declare(strict_types=1);
namespace Healthsvc\TestCase;

trait WebserviceTestTrait {
   abstract protected static function getDefaultBaseUri() : string;
   abstract protected static function getEndpointUri() : string;
   protected static function getBaseUri() : string {
      if (isset($_ENV['WEBSERVICE_BASE_URI'])) {
         return $_ENV['WEBSERVICE_BASE_URI'];
      }
      return static::getDefaultBaseUri();
   }
   protected function concatEndpointUrl() : string {
      return static::getBaseUri().'/'.static::getEndpointUri();
   }
}