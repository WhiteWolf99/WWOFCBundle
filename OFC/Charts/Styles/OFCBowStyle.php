<?php

namespace WW\OFCBundle\OFC\Charts\Styles;

use WW\OFCBundle\OFC\Charts\Styles\OFCStyle;

/**
 * bow style
 *
 * @author farkas
 */
class OFCBowStyle extends OFCStyle
{
  private $rotation;
  
  function __construct($value = null)
  {
    parent::OFCStyle('bow', $value);
  }
  
  /**
   * Set the rotation of the bow
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
