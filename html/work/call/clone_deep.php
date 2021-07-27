<?php

declare(strict_types=1); ?>
<?php

namespace call;

require_once '../vendor/autoload.php';

use model\FriendList;
use model\Person;

$list = new FriendList();
$list->add(new Person('taro', 'yamada'));
$list->add(new Person('hanako', 'yamada'));

foreach ($list as $person) {
  print $person->getFullName() . '<br>';
}

$list2 = clone $list;
print var_dump($list(1) === $list2(1));
