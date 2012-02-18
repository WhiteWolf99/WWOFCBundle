<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCBarChart;

/**
 * 3d version of OFCBarChart
 *
 * @author farkas
 */
class OFCBar3DChart extends OFCBarChart
{
  public function __construct()
  {
    $this->type = 'bar_3d';
  }
}
