<?php

declare(strict_types=1); ?>
<?php
class MyClass2
{
  public string $pub = 'public';
  protected string $pro = 'protected';
  private string $pri = 'private';

  public function showProperty(): void
  {
    foreach ($this as $key => $value) {
      print "{$key}: {$value}<br>";
    }
  }
}


$cls = new MyClass2();
foreach ($cls as $key => $value) {
  print "{$key}: {$value}<br>";
}
print "<hr>";
$cls->showProperty();
?>
