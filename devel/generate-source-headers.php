#!/usr/bin/env php
<?php
/*
 * adds file and class docblocks to a PHP source file
 */
new class() {
   const ME_NAME = 'prepend-dockblock-header.php';
   const ME_USAGE = <<<USAGE
   [--help]|[<...OPTIONS>] <PATH>
   --quiet [<...OPTIONS>] <PATH>
   [<OPTIONS: [--quiet |--verbose]>] <PATH>
USAGE;
   const APP_ROOT = __DIR__ . '/../';
   const VENDOR_AUTOLOAD = self::APP_ROOT . '/vendor/autoload.php';
   
   const SOURCE_COMMENT_HEADER = <<<HEADER
/*
 * This file is part of the Healthsvc package.
 *
 * (c) D. Bird <dougbird@katmore.com>, All Rights Reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
HEADER;
   
   public function __construct() {
      global $argv;
      $offset = null;
      /*
       * parse command-line options
       */
      $opt = getopt("huqv", [
         'help',
         'usage',
         'quiet',
         'version',
         'verbose'
      ], $offset);

      /*
       * apply usage/help mode for
       */
      if (count(array_intersect([
         'v',
         'version',
         'help',
         'h',
         'usage',
         'u'
      ], array_keys($opt)))) {
         $this->printUsage();
         return;
      }

      /*
       * include vendor/autoload.php
       */
      if (! is_file(self::VENDOR_AUTOLOAD)) {
         $this->printLine("missing vendor/autoload.php, have you run composer?", static::PRINT_LINE_ALWAYS | static::PRINT_LINE_ERROR);
         return $this->exitStatus = 1;
      }

      require self::VENDOR_AUTOLOAD;

      /*
       * determine quiet mode
       */
      if (count(array_intersect([
         'q',
         'quiet'
      ], array_keys($opt)))) {
         $this->quietMode = true;
      }

      /*
       * determine verbose mode
       */
      $this->verboseMode = isset($opt['verbose']);

      /*
       * apply command-line argument opt parse offset
       */
      $arg = [];
      if ($offset && count($argv)) {
         $arg = array_slice($argv, $offset);
         array_unshift($arg, $argv[0]);
      }

      /*
       * enforce <PATH> argument exists
       */
      if (empty($phpFile = isset($arg[1]) ? $arg[1] : null)) {
         $this->printLine("missing: <PATH>", static::PRINT_LINE_ALWAYS | static::PRINT_LINE_ERROR);
         return $this->exitStatus = 2;
      }

      /*
       * replace tilde with $HOME in <PATH>
       */
      ! empty($_SERVER['HOME']) && $phpFile = preg_replace('/^~/', $_SERVER['HOME'], $phpFile);
      
      /*
       * 
       */
      try {
         $this->generateSourceHeaderFile($phpFile);
      } catch ( InvalidArgumentException $e ) {
         if ($e->getCode() === static::INVALID_PHP_FILE_EXCEPTION_CODE) {
            $this->printLine("invalid <PATH>: " . $e->getMessage(), static::PRINT_LINE_ALWAYS | static::PRINT_LINE_ERROR);
            return $this->exitStatus = 2;
         }
         throw $e;
      }
      
   }
   
   
   
   const INVALID_PHP_FILE_EXCEPTION_CODE = 702999;
   
   private function generateSourceHeaderFile(string $php_file) {
      /*
       * check php_file exists
       */
      if (! is_file($php_file)) {
         throw new InvalidArgumentException(
            "path not found ($php_file)",
            static::INVALID_PHP_FILE_EXCEPTION_CODE);
      }
      
      /*
       * check php_file write perm
       */
      if (! is_writable($php_file)) {
         throw new InvalidArgumentException(
            "missing write permission ($php_file)",
            static::INVALID_PHP_FILE_EXCEPTION_CODE);
      }
      
      $topCommentStop = $topCommentStart = null;
      $token = token_get_all(file_get_contents($php_file));
      $line = file($php_file);
      array_walk($token,function($tdata) use(&$topCommentStart,&$topCommentStop) {
         
         if ($topCommentStart===null) {
            
            if ($tdata[0]===T_COMMENT) {
               
               $topCommentStart = $tdata[2];
               $topCommentStop = $topCommentStart+substr_count($tdata[1],"\n");
               
            }
         }
      });
      
      
      if ($topCommentStop!==null) {
         
         $fileTop = array_slice($line,0,$topCommentStart-1);
         $fileBot = array_slice($line,$topCommentStop-1);
         $line = $fileTop;
         $line = array_merge($line,$fileBot);
         
      }
      
      
      
      $token = token_get_all(implode("\n",$line));
      $startLine = null;
      array_walk($token,function($tdata) use(&$startLine) {
         if ($startLine===null) {
            if ($tdata[0]===T_NAMESPACE) {
               $startLine=$tdata[2];
            }
         }
      });
      if ($startLine==null) {
         array_walk($token,function($tdata) use(&$startLine) {
            if ($startLine===null) {
               if ($tdata[0]===T_OPEN_TAG) {
                  $startLine=$tdata[2];
               }
            }
         });
      }
      
      $fileTop = array_slice($line,0,$startLine-1);
      $fileBot = array_slice($line,$startLine-1);
      $line = $fileTop;
      
      
      $line []= '';
      $line = array_merge($line,explode("\n",static::SOURCE_COMMENT_HEADER));
      $line []= '';
      $line = array_merge($line,$fileBot);
      
      
   }
   
   
   
   
   /**
    *
    * @var bool quiet mode
    * @private
    */
   private $quietMode = false;
   
   /**
    *
    * @var bool quiet mode
    * @private
    */
   private $verboseMode = false;
   
   /**
    *
    * @var int exit status
    * @private
    */
   private $exitStatus = 0;
   const PRINT_LINE_ALWAYS = 1;
   const PRINT_LINE_NOT_QUIET = 2;
   const PRINT_LINE_VERBOSE = 4;
   const PRINT_LINE_ERROR = 8;
   private function printLine(string $line, int $mode = self::PRINT_LINE_NOT_QUIET): bool {
      if (($mode & static::PRINT_LINE_ALWAYS) || (($mode & static::PRINT_LINE_NOT_QUIET) && ! $this->quietMode) || (($mode & static::PRINT_LINE_VERBOSE) && $this->verboseMode)) {
         if ($mode & static::PRINT_LINE_ERROR) {
            $oldER = error_reporting(error_reporting() & ~ \E_WARNING);
            if (false !== ($f = fopen("php://stderr", "w"))) {
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
   private function printUsage(): void {
      $line = explode("\n", static::ME_USAGE);
      $this->printLine("usage:", static::PRINT_LINE_ALWAYS);
      array_walk($line, function ($line) {
         $this->printLine("  " . static::ME_NAME . " " . trim($line), static::PRINT_LINE_ALWAYS);
      });
         $this->printLine("", static::PRINT_LINE_ALWAYS);
   }
   public function __destruct() {
      exit($this->exitStatus);
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
};