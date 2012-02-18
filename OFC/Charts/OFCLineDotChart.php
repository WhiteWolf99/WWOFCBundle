<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCLineChart;

/**
 * dot version of OFCLineChart
 *
 * @author farkas
 */
class OFCLineDotChart extends OFCLineChart
{
  public function __construct()
  {
    $this->type = 'line_dot';
  }
}
