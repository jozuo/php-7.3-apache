<?php

declare(strict_types=1); ?>

<?php

abstract class FigureAbstract
{
  protected float $width;
  protected float $height;

  public function __construct(float $width, float $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  abstract protected function getArea(): float;
}


