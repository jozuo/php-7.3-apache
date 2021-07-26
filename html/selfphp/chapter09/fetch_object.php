<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';
require_once __DIR__ . '/models/book.php';

$db = getDB();
// $stmt = $db->query("select * from book where isbn='978-4-7981-4102-2'");
// if ($row = $stmt->fetchObject('Book', [0.1])) {
//   print "{$row->title}: {$row->discount()}円";
// }

$stmt = $db->query("select * from book order by published");
while ($row = $stmt->fetchObject('Book', [0.1])) {
  print "{$row->title}: {$row->discount()}円";
}
