<?php

namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCLabel;

/**
 * The X label for the OFChart
 *
 * @author farkas
 */
class OFCXLabel extends OFCLabel
{
  public function __construct($text, $color, $size, $angle)
  {
    $this->setText($text);
    $this->setColor($color);
    $this->setSize($size);
    $this->setRotate($angle);
  }
}
