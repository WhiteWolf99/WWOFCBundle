<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCLineChart;

/**
 * Basic Area chart
 *
 * @author farkas
 */
class OFCAreaChart extends OFCLineChart
{
  protected $fill_alpha;
  private $fill;
  private $loop;
  
  public function __construct()
  {
    $this->type = 'area';
  }
  
  /**
	 * the fill colour
   * @param $color HEX HTML color format
   * @return OFCAreaChart
	 */
	function setFillColor($color)
	{
		$this->fill = $color;
    return $this;
	}

	/**
   * Set alpha transparency
   * 
   * @param float $alpha
   * @return OFCAreaChart 
   */
	function setFillAlpha($alpha)
	{
		$this->fill_alpha = $alpha;
    return $this;
	}
	
  /**
   * Set the area chart to loop
   * 
   * @return OFCAreaChart 
   */
	function setLoop()
	{
		$this->loop = true;
    return $this;
	}
}