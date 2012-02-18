<?php

namespace WW\OFCBundle\OFC\Elements;

/**
 * Arrow element
 *
 * @author farkas ferencz
 */

class OFCArrow
{
  
  private $type;
  private $start;
  private $end;
  private $colour;
  private $barb_length;
  
	/**
	 * @param int $x Start x position
	 * @param int $y Start y position
	 * @param int $a End x position
	 * @param int $b End y position
	 * @param string $color HTML HEX color format
	 * @param int $barb_length Length of the barbs in pixels.
	 */
	function __construct($x, $y, $a, $b, $color, $barb_length=10)
	{
		$this->type   = "arrow";
		$this->start	= array("x" => $x, "y"=> $y);
		$this->end		= array("x "=> $a, "y"=> $b);
		$this->setColor($color);
		$this->barb_length = $barb_length;
	}
	
  /**
   * Set the color
   * 
   * @param type $color HTML HEX color format   * 
   * @return OFCArrow 
   */
	public function setColor($color)
	{
		$this->colour = $color;
    
		return $this;
	}
}