<?php

declare(strict_types=1); ?>
<?php
interface Runnable
{
  function run();
}

class MyClass
{
  public function execute(Runnable $rc): void
  {
    // ダミー処理(本来は何らかの前処理を実行)
    print "start...";
    // 利用側から指定された処理を実行
    $rc->run();
    // ダミー処理(本来は何らかの後処理を実行)
    print "end...";
  }
}

$cls = new MyClass();
$cls->execute(new class implements Runnable
{
  public function run(): void
  {
    print 'process...';
  }
})
?>
