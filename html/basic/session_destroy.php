<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Destroy</title>
</head>

<?php
$value = isset($_SESSION["title"]) ? $_SESSION["title"] : ""
?>

<body>
    <p>ページが遷移しました。</p>
    <p>再びセッションを開始してから、セッションを破棄しました。</p>
    <p>$_SESSION["title"]の値は「<?php echo $value ?>」です。</p>
    <a href="session1.php">最初に戻る</a>
</body>

</html>
