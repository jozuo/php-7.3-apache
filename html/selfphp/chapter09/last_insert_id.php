<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';
try {
  $db = getDb();
  $db->exec(
      "insert into member (name, gender, age, enter, memo) values" .
      "('山田花子', 'female', 19, '2021-09-01', 'memo')"
  );
  // 直近のINSERT命令で取得したオートインクリメント値を取得。
  print "直近のID値：{$db->lastInsertId()}";
} catch (PDOException $e) {
  die("エラーメッセージ:{$e->getMessage()}");
}
