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
 * HostSanityStatusData class
 *
 * @author D. Bird <dougbird@katmore.com>
 */
class HostSanityStatusData extends StatusData {

   /**
    *
    * @var string string reported hostname
    * @private
    */
   protected $hostname;

   /**
    *
    * @return string string reported hostname
    */
   public function gethostname() : string {
      return $this->hostname;
   }

   public function __construct(int $healthStatusTtl=0, string $healthStatusTime=null, string $hostname="") {
      $this->hostname = $hostname;
      parent::__construct($healthStatusTtl, $healthStatusTime);
   }
}
