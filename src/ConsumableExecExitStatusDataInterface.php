<?php
namespace Healthsvc;

interface ConsumableExecExitStatusDataInterface {
   /**
    * @return int[] exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label
    */
   public function getExecExitStatus() : array;
}