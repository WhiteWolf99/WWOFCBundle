<?php

namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCAxis;

/**
 * X-Axis for OFChart
 *
 * @author farkas ferencz
 */
class OFCXAxis extends OFCAxis
{
  public $stroke;
  public $offset;
  public $labels = array();
  public $min;
  public $max;
  public $tick_height;
  public $dim3;
  
  /**
   * Set the stroke size
   * 
   * @param int $stroke The stroke tickness
   * @return OFCXAxis 
   */
  public function setStroke($stroke)
  {
    $this->stroke = $stroke;
    
    return $this;
  }
  
  /**
   * Set the tickheight
   * 
   * @param int $height The height
   * @return OFCXAxis 
   */
  public function setTickHeight($height)
  {
    $this->tick_height = $height;
    
    return $this;
  }
  
  /**
   * Used on bar 3d to set depth
   * 
   * @param int $val
   * @return OFCXAxis 
   */
  public function set3d($val)
  {
    $this->dim3 = $val;
    
    return $this;
  }
  
  /**
   * The labels used on x axis (auto labeling enabled by default)
   * 
   * @param array $labels
   * @return OFCXAxis 
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
    
    return $this;
  }
  
  /**
   * Set the range displayed on x axis
   * 
   * @param int $min
   * @param int $max
   * @param int $step
   * @return OFCXAxis 
   */
  public function setRange($min, $max, $step=1)
  {
    $this->min = $min;
    $this->max = $max;
    $this->setSteps($step);
    
    return $this;
  }
  
  /**
   * Set to true to move the axis from the origin
   * 
   * @param boolean $offset
   * @return OFCXAxis 
   */
  public function useOffset($offset)
  {
    $this->offset = $offset;
    
    return $this;
  }
}