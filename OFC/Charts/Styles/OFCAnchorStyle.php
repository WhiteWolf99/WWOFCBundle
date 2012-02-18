<?php

namespace WW\OFCBundle\OFC\Charts\Styles;

use WW\OFCBundle\OFC\Charts\Styles\OFCStyle;

/**
 * anchor style
 *
 * @author farkas
 */
class OFCAnchorStyle extends OFCStyle
{
  private $rotation;
  private $sides;
  
  function __construct($value = null)
  {
    parent::OFCStyle('anchor', $value);
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
  
  /**
   * Set the number of sides of the anchor
   *
   * @param int $sides
   * @return OFCAnchorStyle 
   */
  public function setSides($sides)
  {
    $this->sides = $sides;
    
    return $this;
  }
}
