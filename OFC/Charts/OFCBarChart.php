<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFChart;

/**
 * Description basic Bar chart
 *
 * @author farkas
 */
class OFCBarChart extends OFChart
{
  public $type;
  public $text;
  public $colour;
  public $font_size;
  public $values = array();
  public $alpha = array();
  public $tip;
  public $on_show;
  public $on_click;
  
  public function __construct()
  {
    $this->type = 'bar';
  }
  
  /**
   * Set a key text and font size in bar chart
   * 
   * @param string $text
   * @param int $size
   * @return OFCBarChart 
   */
  public function setKey($text, $size)
  {
    $this->text = $text;
    $this->font_size = $size;
    
    return $this;
  }
  
  /**
   * Set the color of the bar chart
   * 
   * @param string $color HEX HTML color format
   * @return OFCBarChart 
   */
  public function setColor($color)
  {
    $this->colour = $color;
    
    return $this;
  }
  
  /**
   * Set the values used by the chart
   * 
   * @param array $values
   * @return OFCBarChart 
   */
  public function setValues($values)
  {
    $this->values = $values;
    
    return $this;
  }
  
  /**
   * Append a value to the values array
   * 
   * @param type $value
   * @return OFCBarChart 
   */
  public function appendValue($value)
  {
    $this->values[] = $value;
    
    return $this;
  }
  
  /**
   * Set alpha transparency
   * 
   * @param float $alpha
   * @return OFCBarChart 
   */
  public function setAlpha($alpha)
  {
    $this->alpha = $alpha;
    
    return $this;
  }
  
  /**
   * Set the tooltip for the chart
   * 
   * @param  $tip
   * @return OFCBarChart 
   */
  public function setTooltip($tip)
  {
    $this->tip = $tip;
    
    return $this;
  }
  
 
  /**
   * Set a javascript function to on click event on line chart
   * 
   * @param string $javascript_function_name
   * @return OFCBarChart 
   */
  public function setOnClick($javascript_function_name)
	{
		$this->on_click = $javascript_function_name;
    
    return $this;
	}
  
  /**
   * Set an effect inherited for OFCEffect on line chart show
   * 
   * @param type $effect
   * @return OFCBarChart 
   */
  public function setOnShow($effect)
	{
		$this->on_show = $effect;
    
    return $this;
	}
}