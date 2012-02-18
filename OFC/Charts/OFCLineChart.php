<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFChart;

/**
 * Description basic Line chart
 *
 * @author farkas
 */
class OFCLineChart extends OFChart
{
  protected $type;
  private $text;
  private $colour;
  private $font_size;
  private $values = array();
  private $halo_size;
  private $dot_size;
  private $width;
  private $tip;
  private $on_click;
  private $on_show;
  private $dot_style;
  
  public function __construct()
  {
    $this->type = 'line';
  }
  
  /**
   * Set a key text and font size in line chart
   * 
   * @param string $text
   * @param int $size
   * @return OFCLineChart 
   */
  public function setKey($text, $size)
  {
    $this->text = $text;
    $this->font_size = $size;
    
    return $this;
  }
  
  /**
   * Set the color of the line chart
   * 
   * @param string $color HEX HTML color format
   * @return OFCLineChart 
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
   * @return OFCLineChart 
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
   * @return OFCLineChart 
   */
  public function appendValue($value)
  {
    $this->values[] = $value;
    
    return $this;
  }
  
  /**
   * Set width
   * 
   * @param int $width
   * @return OFCLineChart 
   */
  public function setWidth($width)
  {
		$this->width = $width;
    
    return $this;
	}

  /**
   * Set dot size
   * 
   * @param int $size
   * @return OFCLineChart 
   */
	public function setDotSize($size)
  {
		$this->dot_size = $size;
    
    return $this;
	}
  
  /**
   *
   * @param type $size
   * @return OFCLineChart 
   */
	public function setHaloSize($size)
  {
		$this->halo_size = $size;
    
    return $this;
	}
  
  /**
   * Set the tooltip for the chart
   * 
   * @param  $tip
   * @return OFCLineChart 
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
   * @return OFCLineChart 
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
   * @return OFCLineChart 
   */
  public function setOnShow($effect)
	{
		$this->on_show = $effect;
    
    return $this;
	}
  
  /**
   * Set a dot style
   * 
   * @param $style
   * @return OFCScatterChart 
   */
  public function setDefaultDotStyle($style)
  {
    $this->dot_style = $style;
    return $this;
  }
}