<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

$result = $db->query('select * from book')->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
