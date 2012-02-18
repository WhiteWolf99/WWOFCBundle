<?php

namespace WW\OFCBundle\OFC\Elements;

use WW\OFCBundle\OFC\Elements\OFCAxis;

/**
 * Y-Axis for OFChart
 *
 * @author farkas ferencz
 */
class OFCYAxis extends OFCAxis
{
  private $stroke;
  private $offset;
  private $labels = array();
  private $min;
  private $max;
  private $tick_length;
    
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
   * Set the tickhlength
   * 
   * @param int $length The length
   * @return OFCXAxis 
   */
  public function setTickLength($length)
  {
    $this->tick_length = $length;
    
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