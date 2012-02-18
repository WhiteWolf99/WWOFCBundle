<?php

namespace WW\OFCBundle\OFC\Charts\Effects;
use WW\OFCBundle\OFC\Charts\Effects\OFCEffect;

/**
 * fade-in effect
 *
 * @author farkas
 */
class OFCFadeInEffect extends OFCEffect
{
  /**
   * @param float $cascade Cascade in seconds 
   * @param float $delay Delay before animation starts in seconds. 
   */
  public function __construct($cascade = 1, $delay = 1)
  {
    $this->type = 'fade-in';
    $this->cascade = $cascade;
    $this->delay = $delay;
  }  
}