<?php

namespace WW\OFCBundle\OFC\Charts\Values;

/**
 * stack value object for OFCBarStackChart
 *
 * @author farkas
 */
class OFCBarStackChartValue
{
  
  private $val;
  private $colour;
    
  function __construct($val, $color)
  {
    $this->val = $val;
    $this->colour = $color;
  }
}