<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';

$db = getDb();

try {
  $db->exec('MECHA KUCHA'); // 不正なクエリ
} catch (PDOException $e) {
  print "エラーコード: {$e->getCode()}<br/>";
  print "エラーメッセージ: {$e->getMessage()}<br/>";
}
