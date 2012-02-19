<?php

namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCElement;

/**
 * Base class for chart axis
 *
 * @author farkas ferencz
 */
class OFCAxis extends OFCElement
{
  public $colour;
  public $steps;
  public $grid_colour;
  
  /**
   * Set the text color of the axis
   * 
   * @param string $color HTML HEX color format
   * @return OFCAxis
   */
  public function setColor($color)
  {
    $this->colour = $color;
    
    return $this;
  }
  
  /**
   * Set the grid color
   * 
   * @param string $grid_color
   * @return OFCAxis 
   */
  public function setGridColor($grid_color)
  {
    $this->grid_colour = $grid_color;
    
    return $this;
  }
  
  /**
   * Set the color and the gridcolor 
   * 
   * @param string $color HTML HEX color format
   * @param string $grid_color HTML HEX color format
   * @return OFCAxis 
   */
  public function setColors($color, $grid_color)
  {
    $this->setColor($color);
    $this->setGridColor($grid_color);
    
    return $this;
  }
  
  /**
   * Set the steps
   * 
   * @param int $steps The amount of steps on the axis
   * @return OFCAxis 
   */
  public function setSteps($steps)
  {
    $this->steps = $steps;
    
    return $this;
  }
}
