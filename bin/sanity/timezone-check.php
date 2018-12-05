#!/usr/bin/env php
<?php
/*
 * checks that timezone matches an expected value
 */
$cli = new class() {
   const ME_NAME='timezone-check.php';
   const ME_USAGE=
      "[--help]|[<...OPTIONS>] <EXPECTED-TIMEZONE>\n".
      "--quiet [<...OPTIONS>] <EXPECTED-TIMEZONE>\n".
      "[<...OPTIONS>] --same-offset-ok <EXPECTED-TIMEZONE>\n".
      "[<OPTIONS: [--quiet |--verbose] [--same-offset-ok]] <EXPECTED-TIMEZONE>";
   /**
    * @var bool quiet mode
    */
   private $quietMode=false;
   
   /**
    * @var bool quiet mode
    */
   private $verboseMode=false;
   
   /**
    * @var int exit status
    */
   public $exitStatus=0;
   /**
    * @var int
    */
   private $timezoneUtcOffset;

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
      $this->printLine("usage:");
      array_walk($line,function($line) {
         $this->printLine("  ".static::ME_NAME." $line",static::PRINT_LINE_ALWAYS);
      });
   }
   //private function checkPhp()
   
   
   public function __construct() {
      global $argv;
      $offset=null;
      /*
       * parse command-line options
       */
      $opt = getopt("huqv",['help','usage','quiet','version','verbose','check-php','check-system','same-offset-ok'],$offset);
      
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
       * determine --same-offset-ok mode
       */
      $sameOffsetOk = isset($opt['same-offset-ok']);
      
      /*
       * apply command-line argument opt parse offset
       */
      $arg=[];
      if ($offset && count($argv)) {
         $arg = array_slice($argv,$offset);
         array_unshift($arg,$argv[0]);
      }
      
      /*
       * enforce <EXPECTED-TIMEZONE> exists
       */
      $expecetedTimezone = isset($arg[1])?$arg[1]:null;
      
      if (empty($expecetedTimezone)) {
         $this->printLine("missing <EXPECTED-TIMEZONE>",static::PRINT_LINE_ALWAYS|static::PRINT_LINE_ERROR);
         return $this->exitStatus = 2;
      }
      
      /*
       * enforce <EXPECTED-TIMEZONE> sanity
       */
      try {
         $expecetedTimezone = new DateTimeZone($expecetedTimezone);
      } catch (\Exception $e) {
         if (false!==strpos($e->getMessage(),"bad timezone")) {
            $this->printLine("invalid <EXPECTED-TIMEZONE>: unknown or bad timezone",static::PRINT_LINE_ALWAYS|static::PRINT_LINE_ERROR);
            return $this->exitStatus = 2;
         }
         throw $e;
      }
      
      /*
       * expected timezone name
       */
      $expectedTimezoneName = $expecetedTimezone->getName();
      $expectedDateTime = new DateTime("now",$expecetedTimezone);
      $this->printLine("expected timezone: $expectedTimezoneName",static::PRINT_LINE_VERBOSE);
      
      /*
       * if --same-offset-ok option: determine expected UTC offset  
       */
      if ($sameOffsetOk) {
         $expectedUtcOffset = $expectedDateTime->format('O');
         $this->printLine("expected timezone UTC offset: $expectedUtcOffset",static::PRINT_LINE_VERBOSE);
      }

      $phpTime = new DateTime("now");
      $phpTimezone = $phpTime->getTimezone();
      $phpTimezoneName = $phpTimezone->getName();
      $this->printLine("PHP default timezone: $phpTimezoneName",static::PRINT_LINE_VERBOSE);
      if ($sameOffsetOk) {
         $phpUtcOffset = $phpTime->format('O');
         $this->printLine("PHP default timezone UTC Offset: $phpUtcOffset",static::PRINT_LINE_VERBOSE);
      }
      /*
       * if not a timezone match
       */
      if ($phpTimezoneName!==$expectedTimezoneName) {
         /*
          * if --same-offset-ok option: check if same UTC offset 
          */
         if ($sameOffsetOk) {
            if ($phpUtcOffset!==$expectedUtcOffset) {
               $this->printLine("PHP default timezone failed to match expected timezone name and expected UTC offset (expected offset: $expectedUtcOffset, actual offset: $phpUtcOffset expected name: $expectedTimezoneName, actual name: $phpTimezoneName)",static::PRINT_LINE_ALWAYS|static::PRINT_LINE_ERROR);
               return $this->exitStatus = 3;
            }
         } else {
            $this->printLine("PHP default timezone failed to match expected timezone name (expected: $expectedTimezoneName, actual: $phpTimezoneName)",static::PRINT_LINE_ALWAYS|static::PRINT_LINE_ERROR);
            return $this->exitStatus = 3;
         }
      }
      $this->printLine("ok: PHP default timezone matched expected timezone ($expectedTimezoneName)");
      
   }
};

exit($cli->exitStatus);








