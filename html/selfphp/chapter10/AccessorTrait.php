<?php

declare(strict_types=1); ?>
<?php
trait AccessorTrait
{
  public function __set(string $name, float $value): void
  {
    // キーの有無をチェックし、存在しない場合はエラー
    if ($this->props[$name]) {
      $this->props[$name] = $value;
    } else {
      throw new Exception("{$name}プロパティは存在しません。");
    }
  }

  public function __get(string $name): mixed
  {
    // キーの有無をチェックし、存在しない場合はエラー
    if ($this->props[$name]) {
      return $this->props[$name];
    } else {
      throw new Exception("{$name}プロパティは存在しません。");
    }
  }
}

class MyTrait
{
  use AccessorTrait;

  private $props = [
    'base' => 1,
    'height' => 1,
  ];

  public function getArea(): float
  {
    return $this->base * $this->height / 2;
  }
}

$cls = new MyTrait();
$cls->base = 10;
$cls->height = 5;
print $cls->getArea();

?>
