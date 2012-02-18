<?php

namespace WW\OFCBundle\OFC\Charts\Styles;

use WW\OFCBundle\OFC\Charts\Styles\OFCStyle;

/**
 * hollow dot style
 *
 * @author farkas
 */
class OFCHollowDotStyle extends OFCStyle
{
  function __construct($value = null)
  {
    parent::OFCStyle('hollow-dot', $value);
  }
}
