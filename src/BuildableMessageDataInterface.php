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
 * BuildableMessageDataInterface interface
 *
 * @author D. Bird <dougbird@katmore.com>
 */
interface BuildableMessageDataInterface {
   public function setMessage(string $message) : void;
}
