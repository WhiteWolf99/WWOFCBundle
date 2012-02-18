<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCAreaChart;

/**
 * Hollow version of OFCAreaChart
 *
 * @author farkas
 */
class OFCAreaHollowChart extends OFCAreaChart
{
  public function __construct()
  {
    $this->type      = 'area_hollow';
    $this->fill_alpha = 0.35;
  }
}