<?php

declare(strict_types=1); ?>

<?php
class Person
{
  public string $firstName;
  public string $lastName;

  /**
   * コンストラクタ
   * @param string $firstName 名
   * @param string $lastName 性
   * @return void
   */
  public function __construct(string $firstName, string $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function show(): void
  {
    print "<p>僕の名前は{$this->lastName}{$this->firstName}です。</p>";
  }
}
