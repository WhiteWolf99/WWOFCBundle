<?php

namespace WW\OFCBundle\OFC\Charts\Styles;

use WW\OFCBundle\OFC\Charts\Styles\OFCStyle;

/**
 * solid dot style
 *
 * @author farkas
 */
class OFCSolidDotStyle extends OFCStyle
{

  function __construct($value = null)
  {
    parent::OFCStyle('solid-dot', $value);
  }
}
