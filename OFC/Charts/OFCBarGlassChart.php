<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCBarChart;

/**
 * glass version of OFCBarChart
 *
 * @author farkas
 */
class OFCBarGlassChart extends OFCBarChart
{
  public function __construct()
  {
    $this->type = 'bar_glass';
  }
}
