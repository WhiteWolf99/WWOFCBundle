<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFChart;
use WW\OFCBundle\OFC\Charts\Values\OFCPieChartValue;
use WW\OFCBundle\OFC\Charts\Effects\OFCPieChartFadeEffect;

/**
 * Basic Pie chart
 *
 * @author farkas
 */
class OFCPieChart extends OFChart
{
  private $colours;
  private $alpha;
  private $border;
  private $values;
  private $animate;
  private $start_angle;
  private $tip;
  private $label_colour;
  private $gradient_fill;  
  private $no_labels;
  private $radius;
  private $on_click;
  
  protected $type;
  
  public function __construct()
  {
    $this->type       = 'pie';
		$this->colours    = array("#d01f3c","#356aa0","#C79810");
		$this->alpha			= 0.6;
		$this->border			= 2;
		$this->values			= array(2,3,new OFCPieChartValue(6.5, 'hello (6.5)'));
  }
  
	/**
   * Set the start angle for the pie chart
   * 
   * @param floata $angle
   * @return OFCPieChart 
   */
	public function setStartAngle($angle)
  {
		$this->start_angle = $angle;
    
    return $this;
	}
  
  /**
   * Set the colors of the pie slices
   * 
   * @param array $colors
   * @return OFCPieChart
   */
  public function setColors($colors)
  {
    $this->colours = $colors;
    
    return $this;
  }
  
  /**
	 * @param $alpha as float (0-1) 0.75 = 3/4 visible
   * 
   * @return OFCPieChart
	 */
	public function setAlpha($alpha)
	{
		$this->alpha = $alpha;
    
    return $this;
	}
	
	/**
	 * @param $v as array containing one of
	 *  - null
	 *  - real or integer number
	 *  - a pie_value object
   * 
   * @return OFCPieChart
	 */
	public function setValues($v)
	{
		$this->values = $v;
    
    return $this;
	}

	/**
   * Set animation enabled
   * 
	 * @param $isAnimate
   * @return OFCPIeChart
	 */
	public function setAnimate($isAnimate)
	{
		if($isAnimate)
    {
			$this->addAnimation(new OFCPieChartFadeEffect());
    }
    
    return $this;
	}
	
	/**
   * Add an animation to the pie chart
   * 
	 * @param $animation Animation object
   * @return OFCPIeChart
	 */
	public function addAnimation($animation)
	{
		$this->animate[] = $animation;
		
		return $this;
	}
	
	/**
   * Set the tooltip
   * 
	 * @param $tip
   * @return OFCPIeChart
	 */
	public function setTooltip($tip)
	{
		$this->tip = $tip;
    
    return $this;
	}
	
  /**
   * Turn on gradient fill
   * 
   * @return OFCPieChart 
   */
	public function isGradientFill()
	{
		$this->gradient_fill = true;
    
    return $this;
	}
	
		
	/**
	 * By default each label is the same colour as the slice,
	 * but you can ovveride that behaviour using this method.
	 * 
	 * @param $label_colour as string HEX colour;
   * @return OFCPieChart 
	 */
	public function setLabelColor($label_color)
	{
		$this->label_colour = $label_color;	
    
    return $this;
	}
	

	/**
	 * Turn off the labels
   * @return OFCPieChart 
	 */
	public function setNoLabels()
	{
		$this->no_labels = true;
    
    return $this;
	}
  
	/**
   * Set an event on click
   * 
   * @param $event
   * @return OFCPieChart 
   */
	public function onClick($event)
	{
		$this->on_click = $event;
    
    return $this;
	}
	
	/**
	 * Fix the radius of the pie chart. Take a look at the magic variable #radius#
	 * for helping figure out what radius to set it to.
	 * 
	 * @param $radius as number
   * @return OFCPieChart 
	 */
	public function setRadius($radius)
	{
		$this->radius = $radius;
    
		return $this;
	}
}