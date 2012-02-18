<?php

namespace WW\OFCBundle\OFC\Elements;

/**
 * The base class for all the chart elements
 *
 * @author farkas ferencz
 */
class OFCElement
{
  private $style;
  
  /**
   * Set the style of an chart element
   * 
   * @access public
   * @param string $css supported css rules
   * @return OFCElement
   */
  public function setStyle($css)
  {
    $this->style = $css;
    
    return $this;
  }
}