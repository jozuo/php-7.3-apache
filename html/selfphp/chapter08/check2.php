<?php require_once __DIR__ . "/../encode.php" ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>チェックボックス</title>
</head>

<body>
  選択されたのは<?= e(implode(',', $_POST["lang"])); ?>
</body>

</html>
