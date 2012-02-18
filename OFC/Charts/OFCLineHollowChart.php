<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCLineChart;

/**
 * hollow version of OFCLineChart
 *
 * @author farkas
 */
class OFCLineHollowChart extends OFCLineChart
{
  public function __construct()
  {
    $this->type = 'line_hollow';
  }
}
