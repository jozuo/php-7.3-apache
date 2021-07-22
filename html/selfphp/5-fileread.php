<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アクセスログ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th>アクセス日時</th>
        <th>スクリプト名</th>
        <th>ユーザーエージェント</th>
        <th>リンク元URL</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $file = @fopen('access.log', 'r') or die('ファイルが存在しません。');
      flock($file, LOCK_SH);
      while ($line = fgetcsv($file, 1024, "\t")) {
        print '<tr>';
        foreach ($line as $value) {
          print "<td>{$value}</td>";
        }
        print '</tr>';
      }
      flock($file, LOCK_UN);
      fclose($file);
      ?>
    </tbody>
  </table>
</body>

</html>
