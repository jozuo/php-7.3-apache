<?php

declare(strict_types=1); ?>
<?php
require_once './FigureAbstract.php';

class Square extends FigureAbstract
{
  public function getArea(): float
  {
    return $this->width * $this->height;
  }
}
