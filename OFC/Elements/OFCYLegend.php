<?php
namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCElement;
/**
 * legend element for Y
 *
 * @author farkas ferencz
 */
class OFCYLegend extends OFCElement
{
  private $text;
  
  public function __construct($text)
  {
    $this->text = $text;
  }
}
