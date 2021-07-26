<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';
require_once __DIR__ . '/../util.php';

try {
  $db = getDB();
  // INSERT命令の準備
  $stmt = $db->prepare(
    'insert into book(isbn, title, price, publish, published) ' .
      'values(:isbn, :title, :price, :publish, :published)'
  );
  $stmt->bindValue(':isbn', $_POST['isbn']);
  $stmt->bindValue(':title', $_POST['title']);
  $stmt->bindValue(':price', $_POST['price']);
  $stmt->bindValue(':publish', $_POST['publish']);
  $stmt->bindValue(':published', $_POST['published']);
  // INSERT命令を実行
  $stmt->execute();
  // 処理後は入力フォームにリダイレクト
  redirect('insert_form.php');
} catch (PDOException $e) {
  die("登録に失敗しました。{$e->getMessage()}");
}
