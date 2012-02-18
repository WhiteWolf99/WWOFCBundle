<?php
namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCElement;
/**
 * legend element for X
 *
 * @author farkas ferencz
 */
class OFCXLegend extends OFCElement
{
  private $text;
  
  public function __construct($text)
  {
    $this->text = $text;
  }
}
