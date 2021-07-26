<?php

declare(strict_types=1); ?>

<?php
class TriangleFigure
{
  private float $base = 0;
  private float $height = 0;


  public function getArea(): float
  {
    return  $this->getBase() * $this->getHeight() / 2;
  }


  public function getBase(): float
  {
    return $this->base;
  }
  public function setBase(float $base): void
  {
    if ($base < 0) {
      throw new Exception('baseは正の値で指定します。');
    }
    $this->base = $base;
  }
  public function getHeight(): float
  {
    return $this->height;
  }
  public function setHeight(float $height): void
  {
    if ($height < 0) {
      throw new Exception('hightは正の値で指定します。');
    }
    $this->height = $height;
  }
}

?>
