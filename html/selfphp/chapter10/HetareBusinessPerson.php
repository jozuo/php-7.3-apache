<?php

declare(strict_types=1); ?>
<?php
require_once './BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson
{
  public function work(): void
  {
    parent::work();
    print "ただし、ボチボチと・・・";
  }
}
