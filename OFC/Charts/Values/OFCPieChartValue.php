<?php

namespace WW\OFCBundle\OFC\Charts\Values;

/**
 * Value object for OFCPieChart
 *
 * @author farkas
 */
class OFCPieChartValue
{
  private $value;
  private $label;
  private $colour;
  private $label_colour;
  private $font_size;
  private $tip;
  private $animate = array();
  private $on_lick;
  
  public function __construct($value, $label)
	{
		$this->value = $value;
		$this->label = $label;
	}
	
  /**
   * Set pie value color
   *
   * @param type $color HEX HTML color format
   * @return OFCPieChartValue 
   */
	public function setColor($color)
	{
		$this->colour = $color;
    
    return $this;
	}
	
  /**
   * Set a label (complete control)
   * 
   * @param string $label
   * @param string $label_color
   * @param int $font_size 
   * @return OFCPieChartValue 
   */
	public function setLabel($label, $label_color, $font_size)
	{
		$this->label = $label;
		$this->label_colour = $label_colour;
		$this->font_size = $font_size;
    
    return $this;		
	}
	
  /**
   * Set a tooltip
   * 
   * @param $tip
   * @return OFCPieChartValue 
   */
	public function setTooltip($tip)
	{
		$this->tip = $tip;
    
    return $this;
	}
	/**
   * Set an event on value object
   * 
   * @param type $event
   * @return OFCPieChartValue 
   */
	public function onClick($event)
	{
		$this->on_lick = $event;
    
    return $this;
	}
	
	
	/**
	 * Add an animation
   *
   * @param $animation
   * @return OFCPieChartValue
	 */
	public function addAnimation($animation)
	{
	  $this->animate[] = $animation;
		
		return $this;
	}
}
