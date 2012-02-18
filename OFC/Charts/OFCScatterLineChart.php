<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCScatterChart;

/**
 * line version of OFCScatterChart
 *
 * @author farkas
 */
class OFCScatterLineChart extends OFCScatterChart
{
  public function __construct()
  {
    $this->type = 'scatter_line';
  }
}
