<?php

namespace WW\OFCBundle\OFC\Charts;

use WW\OFCBundle\OFC\Charts\OFChart;

/**
 * Description basic Scatter chart
 *
 * @author farkas
 */
class OFCScatterChart extends OFChart
{
  protected $type;
  private $colour;
  private $values = array();
  private $dot_size;
  private $dot_style;
  private $tip;
  
  
  public function __construct($color, $dot_size)
  {
    $this->type = 'scatter';
    
    $this->setColor($color);
    $this->setDotSize($dot_size);
  }
  
  /**
   * Set the color of the scatter chart
   * 
   * @param string $color HEX HTML color format
   * @return OFCScatterChart 
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
   * @return OFCScatterChart
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
   * @return OFCScatterChart
   */
  public function appendValue($value)
  {
    $this->values[] = $value;
    
    return $this;
  }
  
  /**
   * Set dot size
   * 
   * @param int $size
   * @return OFCScatterChart
   */
	public function setDotSize($size)
  {
		$this->dot_size = $size;
    
    return $this;
	}
  
  /**
   * Set the tooltip for the chart
   * 
   * @param  $tip
   * @return OFCScatterChart
   */
  public function setTooltip($tip)
  {
    $this->tip = $tip;
    
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