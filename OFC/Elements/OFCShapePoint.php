<?php

namespace WW\OFCBundle\OFC\Elements;

/**
 * A simple point object for OFCShape
 *
 * @author farkas
 */
class OFCShapePoint
{
  public $x;
  public $y;
  
  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }
}
