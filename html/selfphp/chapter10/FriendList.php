<?php

declare(strict_types=1); ?>
<?php
require_once './Person.php';

class FriendList implements IteratorAggregate
{
  // ダミーのプロパティを定義
  public string $version = '1.0.0';
  public string $name = '友人リスト';
  private array $persons = [];

  public function getIterator(): Traversable
  {
    return new ArrayIterator($this->persons);
  }

  public function add(Person $person): void
  {
    $this->persons[] = $person;
  }
}
