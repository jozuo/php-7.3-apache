<?phpdeclare(strict_types=1)?>
<?php
require_once __DIR__ . '/../encode.php';

session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>セッション情報</title>
</head>

<body>
  <form action="session2.php" method="POST">
    <label for="email">メールアドレス: </label>
    <input type="text" name="email" id="email" size="40" value="<?= e($_SESSION['email'] ?? ''); ?>">
    <input type="submit" value="送信">
  </form>

</body>

</html>
