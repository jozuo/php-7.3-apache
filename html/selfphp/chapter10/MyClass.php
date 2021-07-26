<?php

declare(strict_types=1); ?>
<?php
class MyClass
{
  public static function square(float $width, float $height): float
  {
    return $width * $height;
  }
}

print "value: " . MyClass::square(10, 20);
