<?php
namespace Healthsvc;

class CommandInfoItem extends InfoItem {
   protected $stdout;
   
   public function getStdout() : array {
      return $this->stdout;
   }

   public function __construct(string $stdout) {
      if (empty($stdout)) {
         $this->stdout = [];
         return;
      }
      $this->stdout = explode("\n",trim($stdout));;
   }
   

}