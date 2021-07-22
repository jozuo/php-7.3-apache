<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>DirectoryIteratorクラス</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th>ファイル</th>
        <th>サイズ</th>
        <th>最終アクセス日</th>
        <th>最終更新日</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $dir = new DirectoryIterator('./');
      foreach ($dir as $file) {
        if ($file->isFile()) {
      ?>
          <tr>
            <td><?= $file->getFilename(); ?></td>
            <td><?= $file->getSize(); ?>B</td>
            <td><?= date('Y/m/d H:i:s', $file->getATime()); ?></td>
            <td><?= date('Y/m/d H:i:s', $file->getMTime()); ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>

</body>

</html>
