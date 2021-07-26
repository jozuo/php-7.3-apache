<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';
try {
  $db = getDb();
  $stmt = $db->prepare("select * from photo where id = :id");
  $stmt->bindValue(':id', $_GET['id'] ?? 1);
  $stmt->execute();
  // 取得列と変数をマッピング
  $stmt->bindColumn('type', $type, PDO::PARAM_STR);
  $stmt->bindColumn('data', $data, PDO::PARAM_LOB);
  // フェッチモードPDO::FETCH_BOUNDでレコードを取得
  if ($stmt->fetch(PDO::FETCH_BOUND)) {
    header("Content-Type: {$type}");
    print $data;
  } else {
    print '該当するデータがありません。';
  }
} catch (PDOException $e) {
  die("エラーメッセージ: {$e->getMessage()}");
}
