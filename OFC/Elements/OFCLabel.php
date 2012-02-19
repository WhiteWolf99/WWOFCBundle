<?php

namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCElement;

/**
 * Base label class for chart labels
 *
 * @author farkas
 */
class OFCLabel extends OFCElement
{
  public $text;
  public $colour;
  public $size;
  public $rotate;
  public $visible;
  
  /**
   * Set the text of the label
   * 
   * @param string $text
   * @return OFCLabel
   */
  public function setText($text)
  {
    $this->text = $text;
    
    return $this;
  }
  
  /**
   * Set the color of the label
   * 
   * @param string $color HEX HTML color format
   * @return OFCLabel 
   */
  public function setColor($color)
  {
    $this->colour = $color;
    
    return $this;
  }
  
  /**
   * Set the size of the label
   * 
   * @param  int $size
   * @return OFCLabel 
   */
  public function setSize($size)
  {
    $this->size = $size;

    return $this;
  }
  
  /**
   * Set the rotation angle
   * 
   * @param int $angle
   * @return OFCLabel 
   */
  public function setRotate($angle)
  {
    $this->rotate = $angle;

    return $this;
  }
  
  /**
   * Set the label in vertical position
   * 
   * @return OFCLabel 
   */
  public function setVertical()
  {
    $this->rotate = 'vertical';
    
    return $this;
  }
  
  /**
   * Set a label visible or hidden (default visible)
   *
   * @param boolean $visible
   * @return OFCLabel 
   */
  public function isVisible($visible)
  {
    $this->visible = $visible;
    
    return $this;
  }
}
