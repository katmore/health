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
 * HostSanityRequest class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class HostSanityRequest extends Request {
   const ALLOWED_METHODS = ['GET'];
   public function isRequestMethodAllowed() : bool {
      return in_array($this->getRequestMethod(), static::ALLOWED_METHODS);
   }
}
