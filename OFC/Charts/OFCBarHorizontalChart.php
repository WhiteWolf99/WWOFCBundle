<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCBarChart;

/**
 * horizontal version of OFCBarChart
 *
 * @author farkas
 */
class OFCBarHorizontalChart extends OFCBarChart
{
  public function __construct()
  {
   	$this->type      = "hbar";
		$this->colour    = "#9933CC";
		$this->text      = "Page views";
		$this->font_size = 10;
  }
}
