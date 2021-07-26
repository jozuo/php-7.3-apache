<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';

$db = getDb();
print "FETCH_ASSOC<br>";
$stmt = $db->query(
    "select title as name, publish as name from book where isbn = '978-4-7981-4102-2'"
);
print_r($stmt->fetch(PDO::FETCH_ASSOC));
print "<br><br>";
print "FETCH_NAMED<br>";
$stmt = $db->query(
    "select title as name, publish as name from book where isbn = '978-4-7981-4102-2'"
);
print_r($stmt->fetch(PDO::FETCH_NAMED));
