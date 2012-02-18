<?php

namespace WW\OFCBundle\OFC\Charts\Styles;

use WW\OFCBundle\OFC\Charts\Styles\OFCStyle;

/**
 * star dot style
 *
 * @author farkas
 */
class OFCStarStyle extends OFCStyle
{
  private $rotation;
  
  function __construct($value = null)
  {
    parent::OFCStyle('star', $value);
  }
  
  /**
   * Set the rotation of the star
   *
   * @param float $angle 
   * @return OFCStarStyle
   */
  public function setRotation($angle)
  {
    $this->rotation = $angle;
    
    return $this;
  }
}
