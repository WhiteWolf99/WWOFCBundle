<?php

namespace WW\OFCBundle\OFC;

use WW\OFCBundle\OFC\Elements\OFCXAxis;
use WW\OFCBundle\OFC\Elements\OFCYAxis;
use WW\OFCBundle\OFC\Elements\OFCXLegend;
use WW\OFCBundle\OFC\Elements\OFCYLegend;
use WW\OFCBundle\OFC\Elements\OFCXLabel;
use WW\OFCBundle\OFC\Elements\OFCYLabel;
use WW\OFCBundle\OFC\Elements\OFCLabelSet;
use WW\OFCBundle\OFC\Elements\OFCShape;
use WW\OFCBundle\OFC\Elements\OFCTooltip;

use WW\OFCBundle\OFC\Charts\OFCBarChart;
use WW\OFCBundle\OFC\Charts\OFCBar3DChart;
use WW\OFCBundle\OFC\Charts\OFCBarFilledChart;
use WW\OFCBundle\OFC\Charts\OFCBarGlassChart;
use WW\OFCBundle\OFC\Charts\OFCBarHorizontalChart;
use WW\OFCBundle\OFC\Charts\OFCBarStackChart;
use WW\OFCBundle\OFC\Charts\OFCBarSketchChart;

use WW\OFCBundle\OFC\Charts\OFCScatterChart;

use WW\OFCBundle\OFC\Charts\OFCLineChart;
use WW\OFCBundle\OFC\Charts\OFCLineDotChart;
use WW\OFCBundle\OFC\Charts\OFCLineHollowChart;

use WW\OFCBundle\OFC\Charts\OFCAreaChart;
use WW\OFCBundle\OFC\Charts\OFCAreaHollowChart;

use WW\OFCBundle\OFC\Charts\OFCPieChart;

use WW\OFCBundle\OFC\Charts\Values\OFCBarChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCBar3DChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCBarFilledChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCBarGlassChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCBarHorizontalChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCBarStackChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCBarSketchChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCScatterChartValue;
use WW\OFCBundle\OFC\Charts\Values\OFCPieChartValue;


/**
 * Factory class for all elements and charts from OFC
 *
 * @author farkas
 */
class ChartFactory
{
  
   /**
   * Returns an X-Axis element
   * 
   * @return OFCXAxis 
   */
  public function CreatesXAxis()
  {
    return new OFCXAxis();
  }
  
  /**
   * Returns an Y-Axis element
   * 
   * @return OFCYAxis 
   */
  public function CreatesYAxis()
  {
    return new OFCYAxis();
  }
  
  /**
   * Creates an X legend for X-axis
   * 
   * @param string $text
   * @return OFCXLegend 
   */
  public function CreatesXLegend($text)
  {
    return new OFCXLegend($text);
  }
  
  /**
   * Creates an Y legend for Y-axis
   * 
   * @param string $text
   * @return OFCXLegend 
   */
  public function CreatesYLegend($text)
  {
    return new OFCYLegend($text);
  }
  
  /**
   * Craete an X-Label
   * 
   * @param string $text
   * @param string $color
   * @param int $size
   * @param int $angle
   * @return OFCXLabel 
   */
  public function CreatesXLabel($text, $color, $size, $angle)
  {
    return new OFCXLabel($text, $color, $size, $angle);
  }
  
  /**
   * Creates an Y-Label
   * 
   * @param int $y
   * @param string $text
   * @return OFCYLabel 
   */
  public function CreatesYLabel($y, $text)
  {
    return new OFCYLabel($y, $text);
  }
  
  /**
   * Creates a label set
   * 
   * @return OFCLabelSet 
   */
  public function CreatesLabelSet()
  {
    return new OFCLabelSet();
  }
  
  /**
   * Creates a simple shape
   * 
   * @param string $color HEX HTML color format
   * @return OFCShape
   */
  public function CreatesShape($color)
  {
    return new OFCShape($color);
  }
  
  /**
   * Creates a tooltip
   * 
   * @return OFCTooltip 
   */
  public function CreatesTooltip()
  {
    return new OFCTooltip();
  }
  
  /**
   * Creates a Barchart
   *
   * @return OFCBarChart 
   */
  public function CreatesBarChart()
  {
    return new OFCBarChart();
  }
  
  /**
   * Creates a 3D bar chart
   *
   * @return OFCBar3DChart 
   */
  public function CreatesBar3DChart()
  {
    return new OFCBar3DChart();
  }
  
  /**
   * Creates filled bar chart
   * 
   * @param string $color
   * @param string $outline_color
   * @return OFCBarFilledChart
   */
  public function CreatesBarFilledChart($color, $outline_color)
  {
    return new OFCBarFilledChart($color, $outline_color);
  }
  
  /**
   * Creates glass bar chart
   *
   * @return OFCBarFilledChart
   */
  public function CreatesBarGlassChart()
  {
    return new OFCBarGlassChart();
  }
  
  /**
   * Creates horizontal bar chart
   * 
   * @return OFCBarHorizontalChart 
   */
  public function CreatesBarHoriztonalChart()
  {
    return new OFCBarHorizontalChart();
  }
  
  /**
   * Creates a stack bar chart
   * 
   * @return OFCBarStackChart 
   */
  public function CreatesBarStackChart()
  {
    return new OFCBarStackChart();
  }

  /**
   * Creates a sketch bar chart
   * 
   * @param string $color
   * @param string $outline_color
   * @param int $fun_factor
   * @return OFCBarSketchChart 
   */
  public function CreatesBarSketchChart($color, $outline_color, $fun_factor)
  {
    return new OFCBarSketchChart($color, $outline_color, $fun_factor);
  }
  
  /**
   * Creates a Scatter Chart
   * 
   * @param string $color HEX HTML color format
   * @param int $dot_size
   * @return OFCScatterChart 
   */
  public function CreatesScatterChart($color, $dot_size)
  {
    return new OFCScatterChart($color, $dot_size);
  }
  
  /**
   * Creates a line chart
   * 
   * @return OFCLineChart 
   */
  public function CreatesLineChart()
  {
    return new OFCLineChart();
  }
  
  /**
   * Creates a lind dot chart
   * 
   * @return OFCLineDotChart 
   */
  public function CreatesLineDotChart()
  {
    return new OFCLineDotChart();
  }
  
  /**
   * Creates a line hollow chart
   * 
   * @return OFCLineHollowChart 
   */
  public function CreatesLineHollowChart()
  {
    return new OFCLineHollowChart();
  }
  
  /**
   * Creates an area chart
   * 
   * @return OFCAreaChart 
   */
  public function CreatesAreaChart()
  {
    return new OFCAreaChart();
  }
  
  /**
   * Creates an area chart
   *
   * @return OFCAreaHollowChart 
   */
  public function CreatesAreaHollowChart()
  {
    return new OFCAreaHollowChart();
  }
  
  /**
   * Creates a pie chart
   * 
   * @return OFCPieChart 
   */
  public function CreatesPieChart()
  {
    return new OFCPieChart();
  }
    
  /**
   * Creates a bar chart value object (for more control)
   * 
   * @param int $top
   * @param int $bottom (optional)
   * @return OFCBarChartValue 
   */
  public function CreatesBarChartValue($top, $bottom = null)
  {
    return new OFCBarChartValue($top, $bottom);
  }
  
  
  
  /**
   * Creates a 3D bar chart value object
   * 
   * @param int $top
   * @return OFCBar3DChartValue 
   */
  public function CreatesBar3DChartValue($top)
  {
    return new OFCBar3DChartValue($top);
  }
  
  /**
   * Creates a Filled bar chart value object
   * 
   * @param int $top
   * @param int $bottom
   * @return OFCBarFilledChartValue 
   */
  public function CreatesBarFilledChartValue($top, $bottom)
  {
    return new OFCBarFilledChartValue($top, $bottom);
  }
  
  /**
   * Creates a glass bar chart value object
   * 
   * @param  int$top
   * @return OFCBarGlassChartValue 
   */
  public function CreatesBarGlassChartValue($top)
  {
    return new OFCBarGlassChartValue($top);
  }
  
  /**
   * Creates a horizontal bar chart value object
   * 
   * @param  int $left
   * @param  int $right
   * @return OFCBarHorizontalChartValue 
   */
  public function CreatesBarHorizontalChartValue($left, $right)
  {
    return new OFCBarHorizontalChartValue($left, $right);
  }
  
  /**
   * Creates a stack bar chart value object
   * 
   * @param  int $val
   * @param  string $color HEX HTML color format
   * @return OFCBarStackChartValue 
   */
  public function CreatesBarStackChartValue($val, $color)
  {
    return new OFCBarStackChartValue($val, $color);
  }
  
  /**
   * Creates a scatter chart value
   * 
   * @param int $x
   * @param int $y
   * @param int $dot_size
   * @return OFCScatterChartValue 
   */
  public function CreatesScatterChartValue($x, $y, $dot_size=-1)
  {
    return new OFCScatterChartValue($x, $y, $dot_size);
  }
  
  /**
   * Creates a piechart value
   * 
   * @param int $value
   * @param string $label
   * @return OFCPieChartValue 
   */
  public function CreatesPieChartValue($value, $label)
  {
    return new OFCPieChartValue($value, $label);
  }
  
  /**
   * Creates an effect 
   * 
   * @param string $effect ('Drop', 'FadeIn', 'GrowDown', 'GrowUp', 'PieChartBounce', 'PieChartFade', 'Pop', 'Popup')
   * @param type $cascade
   * @param type $delay The delay of the effect animation
   * @param type $distance (onfly for 'PieChartBounce', 'PieChartFade')
   */
  public function CreatesEffect($effect,  $cascade = 1, $delay = 1, $distance = 0)
  {
    if(!in_array($effect, array('Drop', 'FadeIn', 
                               'GrowDown', 'GrowUp',
                               'PieChartBounce', 'PieChartFade',
                               'Pop', 'Popup')))
    {
      throw new \InvalidArgumentException('Unrecognized effect '.$effect);
    }
    
    $class = '\WW\OFCBundle\OFC\Charts\Effects\OFC'.$effect.'Effect';
    
    if($effect == 'PieChartBounce' ||  $effect == 'PieChartFade')
    {
      return new $class($distance);
    }

    return new $class($cascade, $delay);
  }
  
  /**
   * Creates a dot style
   *
   * @param string $style ('Anchor', 'Bow', 'Dot', 'SolidDot', 'Start', 'HollowDot')
   * @param int $value
   * @return style class 
   */
  public function CreatesStyle($style, $value = null)
  {
    if(!in_array($style, array('Anchor', 'Bow', 
                               'Dot', 'SolidDot',
                               'Star', 'HollowDot')))
    {
      throw new \InvalidArgumentException('Unrecognized style '.$style);
    }
    
    $class = '\WW\OFCBundle\OFC\Charts\Styles\OFC'.$style.'Style';
    
    return new $class($value);
  }
}