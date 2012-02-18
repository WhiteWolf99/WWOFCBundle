<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCBarChart;

/**
 * Stack version of OFCBarChart
 *
 * @author farkas
 */
class OFCBarStackChart extends OFCBarChart
{
  
  public function __construct()
  {
    $this->type = 'bar_stack';
  }
  
  /**
   * Add value to stack
   *     
   * @param $value
   * @return OFCBarSketchChart 
   */
  public function appendStack($value)
  {
		$this->appendValue($value);
    
    return $this;
	}
}
