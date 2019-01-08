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

/**
 * BuildableResponseDataInterface interface
 *
 * @author D. Bird <dougbird@katmore.com>
 */
interface BuildableResponseDataInterface {
   public function setExecExitStatus(string $label, int $exit_status) : void;
   public function setHealthFailure(string $label, InfoItem $health_failure) : void;
   public function setHealthWarn(string $label, InfoItem $health_warn) : void;
   public function moveHealthFailureToWarn(string $label) : bool;
   public function setHealthSuccess(string $label, InfoItem $success_info=null) : void;
   public function __construct(int $health_staus_ttl=0, string $health_status_time=null);
}
