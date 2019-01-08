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
 * ConsumableExecExitStatusDataInterface interface
 *
 * @author D. Bird <dougbird@katmore.com>
 */
interface ConsumableExecExitStatusDataInterface {
   /**
    *
    * @return int[] exit status codes as assoc array of exit status codes, the element keys are the correspdoning test label
    */
   public function getExecExitStatus() : array;
}
