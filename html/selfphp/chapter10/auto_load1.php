<?php

declare(strict_types=1); ?>
<?php
require_once 'Autoloader.php';

$p = new Person('太郎', '山田');
$p->show();

print_r(ini_get_all());

?>
