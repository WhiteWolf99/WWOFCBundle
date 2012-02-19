<?php

namespace WW\OFCBundle\OFC\Charts;

/**
 * Base class for all the charts, a good extension point
 *
 * @author farkas
 */
class OFChart
{
  public function getJSONEncode() {
    return json_encode(get_object_vars($this));
  }
}