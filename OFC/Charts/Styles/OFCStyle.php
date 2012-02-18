<?php

namespace WW\OFCBundle\OFC\Charts\Styles;

/**
 * Base Style class
 *
 * @author farkas
 */
class OFCStyle
{
  private $value;
  private $color;
  private $x;
  private $y;
  private $tip;
  private $dot_size;
  private $halo_size;
  private $on_click;
  protected $type;
 
  function OFCStyle($type, $value=null) {
    
    $this->type = $type;
		if($value)
			$this->value($value);
  }
  
  /**
   * set Value
   * 
   * @param int $value
   * @return OFCStyle 
   */
  public function setValue($value)
  {
    $this->value = $value;
    
    return $this;
  }
  
  /**
   * Set The style
   * 
   * @param int $x
   * @param int $y
   * @return OFCStyle 
   */
  public function setPosition($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    
    return $this;
  }
  
  /**
   * Set the color
   * 
   * @param type $color
   * @return OFCStyle 
   */
  public function setColor($color)
  {
    $this->color = $color;
    
    return $this;
  }
  
  /**
   * set a tooltip
   * 
   * @param $tip
   * @return OFCStyle 
   */
  public function setTooltip($tip)
  {
    $this->tip = $tip;
    
    return $this;
  }
  
  /**
   * Set the dot size
   * 
   * @param int $dot_size
   * @return OFCStyle 
   */
  public function setSize($dot_size)
  {
    $this->dot_size = $dot_size;
    
    return $this;
  }
  
  /**
   * Set Halo size
   * 
   * @param int $size
   * @return OFCStyle 
   */
  public function setHaloSize($size)
  {
    $this->halo_size = $size;
    
    return $this;
  }
  
  /**
   * Set a click event
   *
   * @param string $javascript_function_name
   * @return OFCStyle 
   */
  public function setOnClick($javascript_function_name)
	{
		$this->on_click = $javascript_function_name;
    
    return $this;
	}
}
