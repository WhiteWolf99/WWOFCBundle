<?php

namespace WW\OFCBundle\OFC\Charts\Values;

/**
 * Simple value object for OFCScatterChart
 *
 * @author farkas
 */
class OFCScatterChartValue
{
  private $x;
  private $y;
  private $dot_size;
  
  function __construct($x, $y, $dot_size=-1)
    {
		$this->x = $x;
		$this->y = $y;

		if($dot_size > 0)
    {
			$this->dot_size = $dot_size;
		}
	}
}