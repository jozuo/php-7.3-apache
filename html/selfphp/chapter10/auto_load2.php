<?php

declare(strict_types=1); ?>
<?php
require __DIR__ . '/../vendor/autoload.php';

use wings\selfphp\Person;

$p = new Person('太郎', '山田');
$p->show();

?>


