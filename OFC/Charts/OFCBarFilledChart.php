<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFCBarChart;

/**
 * Filled version of OFCBarChart
 *
 * @author farkas
 */
class OFCBarFilledChart extends OFCBarChart
{
  public $outline_colour;
  
  public function __construct($color = null, $outline_color = null)
  {
    $this->type      = 'bar_filled';
          
    if ($color)
    {
      $this->setColor($color);
    }
    
    if ($outline_color)
    {
      $this->setOutlineColor($outline_color);
    }
  }
  
  /**
   * Set the outline color
   * 
   * @param string $outline_color HEX HTML color format
   * @return OFCBarFilledChart 
   */
  public function setOutlineColor($outline_color)
  {
    $this->outline_colour = $outline_color;
    
    return $this;
  }
}