#!/usr/bin/env php
<?php
/*
 * checks that a PHP configuration option has an expected value
 */
new class() {
   const ME_NAME='ini-check.php';
   const ME_USAGE=
      "[--help]|[<...OPTIONS>] <SETTING-NAME> <EXPECTED-VALUE>\n".
      "--quiet [<...OPTIONS>] <SETTING-NAME> <EXPECTED-VALUE>\n".
      "[<OPTIONS: [--quiet |--verbose]>] <SETTING-NAME> <EXPECTED-VALUE>";
   private function exitStatusMeanings() : void {
      echo "exit status meanings:\n";
      echo "    3: PHP configuration option did not have expected value\n";
   }
   public function __construct() {
      global $argv;
      $offset=null;
      /*
       * parse command-line options
       */
      $opt = getopt("huqv",['help','usage','quiet','version','verbose',],$offset);
      
      /*
       * apply usage/help mode for
       */
      if(count(array_intersect(['v','version','help','h','usage','u'],array_keys($opt)))) {
         $this->printUsage();
         return;
      }
      
      /*
       * determine quiet mode
       */
      if(count(array_intersect(['q','quiet'],array_keys($opt)))) {
         $this->quietMode = true;
      }
      
      /*
       * determine verbose mode
       */
      $this->verboseMode = isset($opt['verbose']);
      
      /*
       * apply command-line argument opt parse offset
       */
      $arg=[];
      if ($offset && count($argv)) {
         $arg = array_slice($argv,$offset);
         array_unshift($arg,$argv[0]);
      }
      
      /*
       * enforce <SETTING-NAME> exists
       */
      $settingName = isset($arg[1])?$arg[1]:null;
      
      if (empty($settingName)) {
         $this->printLine("missing <SETTING-NAME>",static::PRINT_LINE_ALWAYS|static::PRINT_LINE_ERROR);
         return $this->exitStatus = 2;
      }
      
      /*
       * enforce <EXPECTED-VALUE> exists
       */
      $expectedValue = isset($arg[2])?$arg[2]:null;
      
      if (empty($expectedValue)) {
         $this->printLine("missing <EXPECTED-VALUE>",static::PRINT_LINE_ALWAYS|static::PRINT_LINE_ERROR);
         return $this->exitStatus = 2;
      }
      
      
   }
   
   /**
    * @var bool quiet mode
    * @private
    */
   private $quietMode=false;
   
   /**
    * @var bool quiet mode
    * @private
    */
   private $verboseMode=false;
   
   /**
    * @var int exit status
    * @private
    */
   private $exitStatus=0;

   const PRINT_LINE_ALWAYS = 1;
   const PRINT_LINE_NOT_QUIET = 2;
   const PRINT_LINE_VERBOSE = 4;
   const PRINT_LINE_ERROR = 8;
   private function printLine(string $line,int $mode=self::PRINT_LINE_NOT_QUIET) : bool {
      if (
         ($mode & static::PRINT_LINE_ALWAYS) ||
         (($mode & static::PRINT_LINE_NOT_QUIET) && !$this->quietMode) ||
         (($mode & static::PRINT_LINE_VERBOSE) && $this->verboseMode)) {
            if ($mode & static::PRINT_LINE_ERROR) {
               $oldER = error_reporting(error_reporting() & ~\E_WARNING);
               if (false!==($f=fopen("php://stderr","w"))) {
                  fwrite($f, "$line\n");
               } else {
                  echo "$line\n";
               }
               error_reporting($oldER);
               return true;
            }
         echo "$line\n";
         return true;
      }
      return false;
   }
   private function printUsage() : void {
      $line = explode("\n",static::ME_USAGE);
      $this->printLine("usage:",static::PRINT_LINE_ALWAYS);
      array_walk($line,function($line) 
      {
         $this->printLine("  ".static::ME_NAME." $line",static::PRINT_LINE_ALWAYS);
      });
      $this->printLine("",static::PRINT_LINE_ALWAYS);
      $this->exitStatusMeanings();
   }
   
   public function __destruct() {
      exit($this->exitStatus);
   }
   
   
};








