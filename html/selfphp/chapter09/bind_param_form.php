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
  <title>既存データの更新</title>
</head>

<body>
  <form action="bind_param_process.php" method="POST">
    <input type="submit" value="更新">
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
          $stmt = $db->query("select * from book order by published desc");
          // フォーム要素に付与するための連番
          $cnt = 0;
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $cnt++;
        ?>
            <tr>
              <td>
                <?= e($row['isbn']) ?>
                <input type="hidden" name="isbn<?= e((string)$cnt) ?>" value="<?= e($row['isbn']) ?>">
              </td>
              <td>
                <input type="text" name="title<?= e((string)$cnt) ?>" value="<?= e($row['title']) ?>" size="45">
              </td>
              <td>
                <input type="text" name="price<?= e((string)$cnt) ?>" value="<?= e($row['price']) ?>" size="5">
              </td>
              <td>
                <input type="text" name="publish<?= e((string)$cnt) ?>" value="<?= e($row['publish']) ?>" size="12">
              </td>
              <td>
                <input type="text" name="published<?= e((string)$cnt) ?>" value="<?= e($row['published']) ?>" size="12">
              </td>
            </tr>
        <?php
          }
        } catch (PDOException $e) {
          die("エラーメッセージ: {$e->getMessage()}");
        }
        ?>
      </tbody>
    </table>
    <input type="hidden" name="cnt" value="<?= e((string) $cnt) ?>">
  </form>

</body>

</html>
