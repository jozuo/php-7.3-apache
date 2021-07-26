<?php

declare(strict_types=1); ?>
<?php
require_once './BusinessPerson.php';
require_once './HetareBusinessPerson.php';

$person = new BusinessPerson('花子', '山田');
$person->show();
$person->work();

$hetare = new HetareBusinessPerson('邦夫', '田中');
$hetare->work();
