<?php

declare(strict_types=1); ?>
<?php
$email = $_POST['email'] ?? '';
if (strlen($email) > 0) {
  setcookie('email1', $_POST['email'], time() + (60 * 60 * 24 * 90));
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クッキー情報</title>
</head>

<body>
  <?php
  if (strlen($email) > 0) {
  ?>
    クッキーを保存しました。
  <?php
  } else {
  ?>
    値がブランクです。
  <?php
  }
  ?>
</body>

</html>
