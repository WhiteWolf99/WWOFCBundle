<?php

namespace WW\OFCBundle\OFC\Elements;

/**
 * Tooltip class
 *
 * @author farkas ferencz
 */
class OFCTooltip
{
  private $shadow;
  private $stroke;
  private $color;
  private $background;
  private $title;
  private $body;
  private $mouse;

  /**
   * @param $shadow as boolean. Enable drop shadow.
   * @return OFCTooltip
   */
  public function setShadow($shadow)
  {
    $this->shadow = $shadow;

    return $this;
  }

  /**
   * @param $stroke as integer, border width in pixels (e.g. 5)
   * @return OFCTooltip
   */
  public function setStroke($stroke)
  {
    $this->stroke = $stroke;

    return $this;
  }

  /**
   * @param $colour as string, HEX colour e.g. '#0000ff'
   * @return OFCTooltip
   */
  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }

  /**
   * @param $bg as string, HEX colour e.g. '#0000ff'
   * @return OFCTooltip
   */
  public function setBackgroundColor($bg)
  {
    $this->background = $bg;

    return $this;
  }

  /**
   * @param $style as string. A css style.
   * @return OFCTooltip
   */
  public function setTitleStyle($style)
  {
    $this->title = $style;

    return $this;
  }

  /**
   * @param $style as string. A css style.
   * @return OFCTooltip
   */
  public function setBodyStyle($style)
  {
    $this->body = $style;

    return $this;
  }

  /**
   * Set the mouse proximity
   * 
   * @return OFCTooltip 
   */
  public function setProximity()
  {
    $this->mouse = 1;

    return $this;
  }

  /**
   * Set hover
   * 
   * @return OFCTooltip 
   */
  public function setHover()
  {
    $this->mouse = 2;

    return $this;
  }
}