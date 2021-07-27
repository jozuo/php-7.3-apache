<?php

declare(strict_types=1); ?>
<?php

namespace model;

use ArrayIterator;

class FriendList implements \IteratorAggregate
{
  private array $list = [];

  public function getIterator()
  {
    return new ArrayIterator($this->list);
  }

  /**
   * 要素を追加します。
   * @param Person $person 追加する要素
   * @return void
   */
  public function add(Person $person)
  {
    $this->list[] = $person;
  }

  /**
   * 関数表記で1要素を取得します。
   * @param int $index 要素の格納されているインデックス
   * @return Person 指定されたインデックスの要素
   */
  public function __invoke(int $index): Person
  {
    return $this->list[$index];
  }

  public function __clone()
  {
    foreach ($this->list as &$person) {
      $person = clone $person;
    }
  }
}
