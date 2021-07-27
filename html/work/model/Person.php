<?php

declare(strict_types=1); ?>
<?php

namespace model;

/** @package model */
class Person
{
  private string $firstName;
  private string $lastName;


  public function __construct(string $lastName, string $firstName)
  {
    $this->lastName = $lastName;
    $this->firstName = $firstName;
  }

  /**
   * 名称を取得します。
   * @return string 名称
   **/
  public function getFullName(): string
  {
    return $this->lastName . ' ' . $this->firstName;
  }
}
