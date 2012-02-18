<?php

namespace WW\OFCBundle\OFC\Charts\Effects;
use WW\OFCBundle\OFC\Charts\Effects\OFCEffect;

/**
 * dropeffect
 *
 * @author farkas
 */
class OFCDropEffect extends OFCEffect
{
  /**
   * @param float $cascade Cascade in seconds 
   * @param float $delay Delay before animation starts in seconds. 
   */
  public function __construct($cascade = 1, $delay = 1)
  {
    $this->type = 'drop';
    $this->cascade = $cascade;
    $this->delay = $delay;
  }  
}