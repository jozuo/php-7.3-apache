<?php

declare(strict_types=1); ?>

<?php
require_once __DIR__ . '/../encode.php';
$title = $_POST["title"] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>練習問題4</title>
</head>

<body>
  <form method="POST" action="prac4.php">
    署名: <input type="text" name="title" id="title" size="50" value="<?= $title ?? "" ?>" />
    <input type="submit" value="検索">
  </form>
  <?php
  require_once __DIR__ . '/../dbmanager.php';

  if (isset($_POST["title"])) {
  ?>
    <ul>
      <?php
      try {
        $db = getDb();
        $stmt = $db->prepare("select * from book where title like :title");
        $stmt->bindValue(':title', "%{$_POST['title']}%");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      ?>
          <li><?= e($row["title"]) ?></li>
      <?php
        }
      } catch (PDOException $e) {
        die("エラーメッセージ: {$e->getMessage()}");
      }
      ?>
    </ul>
  <?php } ?>

</body>

</html>
