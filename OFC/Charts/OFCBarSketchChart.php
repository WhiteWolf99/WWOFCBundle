<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCBarChart;

/**
 * Sketch version of OFCBarChart
 *
 * @author farkas
 */
class OFCBarSketchChart extends OFCBarChart
{
  private $offset;
  private $outline_colour;
  
  public function __construct($color, $outline_color, $fun_factor)
  {
    $this->type = 'bar_sketch';
    $this->setColor($color);
    $this->setOutlineColor($outline_color);
    $this->offset = $fun_factor;
  }
  
  /**
   * Set the outline color
   *     
   * @param string $outline_color HEX HTML color format
   * @return OFCBarSketchChart 
   */
  public function setOutlineColor($outline_color)
  {
		$this->outline_colour = $outline_color;
    
    return $this;
	}
}
