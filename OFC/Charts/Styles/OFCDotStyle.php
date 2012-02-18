<?php

namespace WW\OFCBundle\OFC\Charts\Styles;

use WW\OFCBundle\OFC\Charts\Styles\OFCStyle;

/**
 * dot style
 *
 * @author farkas
 */
class OFCDotStyle extends OFCStyle
{

  function __construct($value = null)
  {
    parent::OFCStyle('dot', $value);
  }
}
