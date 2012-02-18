<?php

namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCLabel;

/**
 * The Y label for the OFChart
 *
 * @author farkas
 */
class OFCYLabel extends OFCLabel
{
  private $y;
  
  public function __construct($y, $text)
  {
    $this->y = $y;
    $this->setText($text);
  }
}
