<?php
namespace Healthsvc;

interface BuildableExecExitStatusDataInterface {
   public function setExecExitStatus(string $label, int $exit_status) : void;
}