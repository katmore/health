<?php

/*
 * This file is part of the Healthsvc package.
 *
 * (c) D. Bird <dougbird@katmore.com>, All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Healthsvc;

use JsonSerializable;
use ReflectionClass;
use ReflectionProperty;
/**
 * SerializableData class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
abstract class SerializableData implements JsonSerializable {

   const PROPERTIES_TO_SNAKE_CASE = true;

   protected function getSerializableProperties() : array {
      $serializableProperties = [];
      $prop = (new ReflectionClass($this))->getProperties(ReflectionProperty::IS_PUBLIC|ReflectionProperty::IS_PROTECTED);
      array_walk($prop, function(ReflectionProperty $p) use(&$serializableProperties) {
            $serializableProperties []= $p->name;
         });
      return $serializableProperties;
   }

   protected function getSerializableValues() : array {
      return [];
   }

   final protected static function toSnakeCase(string $input) : string {
      $matches = null;
      preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
      $matches = $matches[0];
      array_walk($matches, function(&$word) {
            $word = $word == strtoupper($word) ? strtolower($word) : lcfirst($word);
         });
      return implode('_', $matches);
   }

   /**
    * Part of the JsonSerializable interface
    *
    * @see \JsonSerializable
    */
   public function jsonSerialize() {
      $data = [];
      $serializableProperties = $this->getSerializableProperties();

      $prop = (new ReflectionClass($this))->getProperties(ReflectionProperty::IS_PUBLIC|ReflectionProperty::IS_PROTECTED);
      array_walk($prop, function(ReflectionProperty $p)
         use($serializableProperties, &$data) {
            if (!in_array($p->name, $serializableProperties)) return;
            if (static::PROPERTIES_TO_SNAKE_CASE) {
               $name = self::toSnakeCase($p->name);
            } else {
               $name = $p->name;
            }
            $data[$name] = $this->{$p->name};
         });

      $serializableValues = $this->getSerializableValues();
      array_walk($serializableValues, function($val, $key) use(&$data) {
            $data[$key] = $val;
         });

      return $data;
   }

   public function toSerializedArray() : array {
      return json_decode(json_encode($this->jsonSerialize()), true);
   }

   /**
    * Provides an assoc array corresponding to this response data item
    *
    * @return array
    */
   public function toArray() : array {
      return json_decode(json_encode($this), true);
   }
}
