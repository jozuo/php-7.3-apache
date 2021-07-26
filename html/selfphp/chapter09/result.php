<?php

declare(strict_types=1); ?>
<?php
require_once __DIR__ . '/../dbmanager.php';
require_once __DIR__ . '/../encode.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>結果セット</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th>ISBNコード</th>
        <th>書名</th>
        <th>価格</th>
        <th>出版社</th>
        <th>刊行日</th>
      </tr>
    </thead>
    <tbody>
      <?php
      try {
        $db = getDb();
        // $stmt = $db->prepare('select * from book order by published desc');
        // $stmt->execute();
        $stmt = $db->query('select * from book order by published desc');
        // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($stmt as $row) {
          ?>
          <tr>
            <td><?= e($row['isbn']); ?> </td>
            <td><?= e($row['title']); ?> </td>
            <td><?= e($row['price']); ?> </td>
            <td><?= e($row['publish']); ?> </td>
            <td><?= e($row['published']); ?> </td>
          </tr>
          <?php
        }
      } catch (PDOException $e) {
        die("エラーメッセージ: {$e->getMessage()}");
      }
      ?>
    </tbody>
  </table>

</body>

</html>
