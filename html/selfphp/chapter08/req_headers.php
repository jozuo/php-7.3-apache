<?php require_once __DIR__ . '/../encode.php'; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>ヘッダー情報収集</title>
</head>

<body>
  <table class="table">
    <?php
    // $SERVERのキー/値を順に取得
    foreach ($_SERVER as $key => $value) {
      // キーが“HTTP_”で始まる値のみ出力
      if (strpos($key, 'HTTP_') === 0) {
    ?>
        <tr valign="top">
          <th><?= e($key); ?></th>
          <td><?= e($value) ?></td>
        </tr>
    <?php
      }
    }
    ?>
  </table>
</body>

</html>
