<?php

declare(strict_types=1); ?>
<?php
require_once './FriendList.php';
require_once './Person.php';

$list = new FriendList();
$list->add(new Person('太郎', '山田'));
$list->add(new Person('奈美', '掛谷'));
$list->add(new Person('涼太', '高橋'));

foreach ($list as $value) {
  print $value->show();
}
