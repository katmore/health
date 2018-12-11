<?php
namespace Healthsvc;

interface BuildableResponseDataInterface {
   public function setExecExitStatus(string $label, int $exit_status) : void;
   public function setHealthFailure(string $label, InfoItem $health_failure) : void;
   public function setHealthWarn(string $label, InfoItem $health_warn) : void;
   public function moveHealthFailureToWarn(string $label) : bool;
   public function setHealthSuccess(string $label,InfoItem $success_info=null) : void;
   public function __construct(int $health_staus_ttl=0, string $health_status_time=null);
}