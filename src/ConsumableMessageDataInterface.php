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
 * ConsumableMessageDataInterface interface
 *
 * @author D. Bird <dougbird@katmore.com>
 */
interface ConsumableMessageDataInterface {
   /**
    * Provides message associated with this health status.
    *
    * @return string message
    */
   public function getMessage() : string;
}
