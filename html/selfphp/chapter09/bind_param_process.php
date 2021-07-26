<?php

declare(strict_types=1); ?>

<?php
require_once __DIR__ . '/../dbmanager.php';
require_once __DIR__ . '/../util.php';

try {
    $db = getDb();
    $stmt = $db->prepare(
        "update book set title=:title, price=:price, publish=:publish, published=:published where isbn=:isbn"
    );
    $stmt->bindParam(":isbn", $isbn);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":publish", $publish);
    $stmt->bindParam(":published", $published);

    // フォームからの入力値を順にセット
    for ($index = 1; $index <= $_POST["cnt"]; $index++) {
        $isbn = $_POST["isbn{$index}"];
        $title = $_POST["title{$index}"];
        $price  = $_POST["price{$index}"];
        $publish = $_POST["publish{$index}"];
        $published = $_POST["published{$index}"];
        $stmt->execute();
    }
    // 処理後は元のフォームにリダイレクト
    redirect('bind_param_form.php');
} catch (PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}
