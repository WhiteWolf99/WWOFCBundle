<?php

namespace WW\OFCBundle\OFC\Charts\Values;

/**
 * Simple value object for OFCBarChart
 *
 * @author farkas
 */
class OFCBarChartValue
{
  private $top;
  private $bottom = null;
  private $colour;
  private $tip;
  
  function __construct($top, $bottom=null)
  {
    $this->top = $top;

    if (isset($bottom))
    {
      $this->bottom = $bottom;
    }
  }

  /**
   * Set the color of the bar value
   * 
   * @param string $color HEX HTML color format
   * @return OFCBarChartValue 
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
   * @return OFCBarChartValue 
   */
  function setTooltip($tip)
  {
    $this->tip = $tip;
    
    return $this;
  }
}