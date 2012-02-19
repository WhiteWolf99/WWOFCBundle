<?php

namespace WW\OFCBundle\OFC\Elements;

/**
 * A label set class for multiple labels
 *
 * @author farkas
 */
class OFCLabelSet
{
  public $steps;
  public $rotate;
  public $colour;
  public $size;
  public $labels = array();
  
  /**
   * Set the labels size
   * 
   * @param int $size
   * @return OFCLabelSet 
   */
  public function setSize($size)
  {
    $this->size = $size;
    
    return $this;
  }
  
  /**
   * Set the labels color
   * 
   * @param type $color HEX HTML color format
   * @return OFCLabelSet 
   */
  public function setColor($color)
  {
    $this->colour = $color;
    
    return $this;
  }
  
  /**
   * Set display steps 
   * 
   * @param int $steps
   * @return OFCLabelSet 
   */
  public function setSteps($steps)
  {
    $this->steps = $steps;
    
    return $this;
  }
  
  /**
   * Set the labels for this labelset
   * 
   * @param array $labels
   * @return OFCLabelSet 
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
    
    return $this;
  }
  
  /**
   * Set vertical position for all labels
   *
   * @return OFCLabelSet 
   */
  public function setVertical()
  {
    $this->rotate = 'vertical';
    
    return $this;
  }
}
