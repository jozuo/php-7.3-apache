<?php

declare(strict_types=1); ?>
<?php
trait MachineTrait
{
  private string $starting = 'Starting...Run!';

  // 機器を起動
  public function run(): void
  {
    print $this->starting;
  }
}

?>
