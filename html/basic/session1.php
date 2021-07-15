<?php

session_start();
$_SESSION["title"] = "PHPのキソ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session1</title>
</head>

<body>
    <p>セッションが開始されました。</p>
    <p>$_SESSION["title"]に代入した値は「<?php echo $_SESSION["title"] ?>」です。</p>
    <p><a href="session2.php">次のページ</a>に遷移してみましょう。</p>
</body>

</html>
