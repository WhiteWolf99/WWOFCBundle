<?php

namespace WW\OFCBundle\OFC\Charts\Values;

use WW\OFCBundle\OFC\Charts\Values\OFCBarChartValue;

/**
 * Value object for OFCBarHorizontalChart
 *
 * @author farkas
 */
class OFCBarHorizontalChartValue
{

  public $left;
  public $right;
  
  public function __construct($left, $right)
  {
    $this->left = $left;
    $this->right = $right;
  }
}