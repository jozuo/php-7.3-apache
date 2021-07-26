<?php

declare(strict_types=1); ?>
<?php
require_once './MachineTrait.php';

class Fax
{
  use MachineTrait;

  // Faxを送信
  public function send(): void
  {
    print 'sending Fax...sended';
  }
}

$fax = new Fax();
$fax->run();
$fax->send();

?>
