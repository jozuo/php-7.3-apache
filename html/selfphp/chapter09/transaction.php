<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';

try {
  $db = getDb();
  // 処理の成否を例外として通知するため エラーモードを変更
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // トランザクション開始
  $db->beginTransaction();

  $db->exec("insert into book values ('isbn1', '独習PHP 第2版', 3200, '翔泳社', '2020-04-12')");
  // 一意制約違反
  $db->exec("insert into book values ('isbn2', '独習PHP 第3版', 3200, '翔泳社', '2020-04-12')");

  // 全ての処理が成功したらコミット
  $db->commit();
} catch (PDOException $e) {
  $db->rollBack();
  die("エラーメッセージ: {$e->getMessage()}");
}
