<?php

declare(strict_types=1); ?>
<?php
require_once './Person.php';

class BusinessPerson extends Person
{
  public function work(): void
  {
    print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
  }
}
?>
