<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';
try {
    $db = getDb();
    $stmt = $db->prepare(
        "insert into photo(type, data)" .
            "values(:type, :data)"
    );
    $file = fopen($_FILES['photo']['tmp_name'], 'rb');
    $stmt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
    $stmt->bindValue(':data', $file, PDO::PARAM_LOB);
    $stmt->execute();
    print "写真のアップロードに成功しました。";
} catch (PDOException $e) {
    die("エラーメッセージ:{$e->getMessage()}");
} finally {
  if ($file) {
      fclose($file);
  }
}
