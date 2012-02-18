<?php

namespace WW\OFCBundle\OFC\Charts\Effects;
use WW\OFCBundle\OFC\Charts\Effects\OFCEffect;

/**
 * grow-down effect
 *
 * @author farkas
 */
class OFCGrowDownEffect extends OFCEffect
{
  /**
   * @param float $cascade Cascade in seconds 
   * @param float $delay Delay before animation starts in seconds. 
   */
  public function __construct($cascade = 1, $delay = 1)
  {
    $this->type = 'grow-down';
    $this->cascade = $cascade;
    $this->delay = $delay;
  }  
}