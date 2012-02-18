<?php

namespace WW\OFCBundle\OFC\Charts\Effects;
use WW\OFCBundle\OFC\Charts\Effects\OFCEffect;

/**
 * grow-up effect
 *
 * @author farkas
 */
class OFCGrowUpEffect extends OFCEffect
{
  /**
   * @param float $cascade Cascade in seconds 
   * @param float $delay Delay before animation starts in seconds. 
   */
  public function __construct($cascade = 1, $delay = 1)
  {
    $this->type = 'grow-up';
    $this->cascade = $cascade;
    $this->delay = $delay;
  }  
}