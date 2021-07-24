<?php

declare(strict_types=1); ?>
<?php
session_start();

$email = $_POST['email'] ?? '';
if (strlen($email) > 0) {
  $_SESSION['email'] = $email;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>セッション情報</title>
</head>

<body>
  <?php
  if (strlen($email) > 0) {
    print "セッション情報を保存しました。";
  } else {
    print "値がブランクです。";
  }
  ?>
  <br />
  <a href="session_destroy.php">セッションを破棄</a>

</body>

</html>
