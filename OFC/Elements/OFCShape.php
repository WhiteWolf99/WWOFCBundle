<?php

namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCShapePoint;

/**
 * Basic shape class for OFCHart
 *
 * @author farkas
 */
class OFCShape
{
  public $type;
  public $colour;
  public $values = array();
  
  public function __construct($color)
  {
    $this->colour = $color;
    $this->type = 'shape';
  }
  
  /**
   * Add a point to the shape
   * 
   * @param int $x
   * @param int $y
   * @return OFCShape 
   */
  public function addPoint($x, $y)
  {
    $this->values[] = new OFCShapePoint($x, $y);
    
    return $this;
  }
}
