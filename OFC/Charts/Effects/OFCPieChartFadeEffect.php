<?php

namespace WW\OFCBundle\OFC\Charts\Effects;

/**
 * fade effect for OFCPieChart or OFCPieChartValue
 *
 * @author farkas
 */
class OFCPieChartFadeEffect
{
  private $type;
  
  public function __construct()
  {
    $this->type = 'fade';
  }  
}
