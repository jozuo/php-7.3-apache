<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アップロード処理</title>
</head>

<body>
  <form action="file2.php" method="POST" enctype="multipart/form-data">
    <label for="upfile">
      <input type="hidden" name="max_file_size" value="1000000">
      <input type="file" name="upfile" id="upfile">
      <input type="submit" value="アップロード">
    </label>
  </form>
</body>

</html>
