<?php

namespace WW\OFCBundle\OFC;

use Symfony\Component\HttpFoundation\Response;

/**
 * Chart container
 */
class OFChartContainer
{
  public $elements = array();
  public $title;
  public $x_axis;
  public $y_axis;
  public $y_axis_right;
  public $x_legend;
  public $y_legend;
  public $num_decimals;
  public $is_fixed_num_decimals_forced;
  public $is_decimal_separator_comma;
  public $is_thousand_separator_disabled;

  /**
   * Set the title
   * 
   * @param string $title
   * @return OFChartContainer 
   */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Set the x axis
   * 
   * @param object $x
   * @return OFChartContainer 
   */
  public function setXAxis($x)
  {
    $this->x_axis = $x;	

    return $this;
  }

  /**
   * Set the Y axis
   * 
   * @param object $y 
   * @return OFChartContainer
   */
  public function setYAxis($y)
  {
    $this->y_axis = $y;

    return $this;
  }

  /**
   * Set the y axis on right
   * 
   * @param object $y
   * @return OFChartContainer 
   */
  public function setYAxisRight($y)
  {
    $this->y_axis_right = $y;

    return $this;
  }

  /**
   * Adds an element to the chart container
   * 
   * @param object $e
   * @return OFChartContainer 
   */
  public function addElement($e)
  {
    $this->elements[] = $e;

    return $this;
  }

  /**
   * Sets the legend for X axis
   * 
   * @param Legend $x
   * @return OFChartContainer 
   */
  public function setXLegend($x)
  {
    $this->x_legend = $x;

    return $this;
  }

  /**
   * Sets the legend for y axis
   * 
   * @param Legend $y
   * @return OFChartContainer 
   */
  public function setYLegend($y)
  {
    $this->y_legend = $y;

    return $this;
  }

  /**
   * Set the background color for the container
   * 
   * @param string $color HTML HEX color format
   * @return OFChartContainer 
   */
  public function setBgColor($color)
  {
    $this->bg_colour = $color;

    return $this;
  }

  /**
   * Set a tooltip for chart container
   * 
   * @param tooltip $tooltip
   * @return OFChartContainer 
   */
  public function setTooltip($tooltip)
  {
    $this->tooltip = $tooltip;

    return $this;
  }

  /**
   * Set number format
   *
   * @param int $num_decimals Truncate the decimals to $num_decimals, e.g. set it
   * to 5 and 3.333333333 will display as 3.33333. 2.0 will display as 2 (or 2.00000 - see below)
   * @param boolean $is_fixed_num_decimals_forced If true it will pad the decimals.
   * @param boolean $is_decimal_separator_comma
   * @param boolean $is_thousand_separator_disabled
   * @return OFChartContainer
   */
  public function setNumberFormat($num_decimals, 
                             $is_fixed_num_decimals_forced,
                             $is_decimal_separator_comma,
                             $is_thousand_separator_disabled)
  {
    $this->num_decimals = $num_decimals;
    $this->is_fixed_num_decimals_forced = $is_fixed_num_decimals_forced;
    $this->is_decimal_separator_comma = $is_decimal_separator_comma;
    $this->is_thousand_separator_disabled = $is_thousand_separator_disabled;

    return $this;
  }


  public function __toString()
  {
    $replaces = array('outline_colour' => 'outline-colour',
                      'label_colour'	=> 'label-colour',
                      'font_size'	=> 'font-size',
                      'on_click'	=> 'on-click',
                      'dot_size'	=> 'dot-size',
                      'fill_alpha'	=> 'fill-alpha',
                      'on_show'	=> 'on-show',
                      'dot_style'	=> 'dot-style',
                      'halo_size'	=> 'halo-size',
                      'start_angle'	=> 'start-angle',
                      'gradient_fill'	=> 'gradient-fill',
                      'no_labels'	=> 'no-labels',
                      'barb_length'	=> 'barb-length',
                      'grid_colour'	=> 'grid-colour',
                      'tick_height'	=> 'tick-height',
                      'tick_length'	=> 'tick-length');

    /* we need some replaces since the flash chart uses some variables with hyphen
     * also removing null or empty values
     * but in php these kind of variables are not allowed
     */
    return preg_replace('/,*"[a-z0-9\-\_]+"\:(null|\[\]),*/i','',
                        str_replace(
                                array_keys($replaces),
                                array_values($replaces),
                                json_encode($this)));
  }

  /**
   * Make a response object of type json 
   *
   * @return Response 
   */
  public function toJSONResponse()
  {
    $response = new Response($this->__toString());

    $response->headers->set('Content-Type', 'text/json');

    return $response;
  }
}
