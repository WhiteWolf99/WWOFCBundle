<?php

namespace WW\OFCBundle\OFC\Charts\Values;

/**
 * Simple value object for OFCBarGlassChart
 *
 * @author farkas
 */
class OFCBarGlassChartValue
{
  public $top;
  public $colour;
  public $tip;
  
  function __construct($top)
  {
    $this->top = $top;
  }

  /**
   * Set the color of the bar value
   * 
   * @param string $color HEX HTML color format
   * @return OFCBarGlassChartValue 
   */
  function setColor($color)
  {
    $this->colour = $color;
    
    return $this;
  }

  /**
   * Set tooltip for individula value
   * 
   * @param  $tip
   * @return OFCBarGlassChartValue 
   */
  function setTooltip($tip)
  {
    $this->tip = $tip;
    
    return $this;
  }
}