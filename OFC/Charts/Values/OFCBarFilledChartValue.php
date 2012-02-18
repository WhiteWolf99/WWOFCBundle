<?php

namespace WW\OFCBundle\OFC\Charts\Values;

use WW\OFCBundle\OFC\Charts\Values\OFCBarChartValue;

/**
 * Value object for OFCBarFilledChart
 *
 * @author farkas
 */
class OFCBarFilledChartValue extends OFCBarChartValue
{
  private $outline_colour;
  
  public function __construct($top, $bottom)
  {
    parent::OFCBarChartValue($top, $bottom);
  }
 
  /**
   * Set the outline color
   *
   * @param type $outline_color HEX HTML color format
   * @return OFCBarFilledChartValue 
   */
  public function setOutlineColor($outline_color)
  {
    $this->outline_colour = $outline_color;
    
    return $this;
  }  
}