<?php

namespace WW\OFCBundle\OFC\Charts\Effects;

/**
 * bounce effect for OFCPieChart or OFCPieChartValue
 *
 * @author farkas
 */
class OFCPieChartBounceEffect
{
  public $type;
  public $distance;
  
  /**
   * @param int $distance 
   */
  public function __construct($distance)
  {
    $this->type = 'bounce';
    $this->distance = $distance;
  }  
}