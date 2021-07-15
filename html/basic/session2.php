<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session2</title>
</head>

<body>
    <p>ページが遷移しました。再びセッションを開始します。</p>
    <p>受け取ったセッション変数の値は「<?php echo $_SESSION["title"] ?>」です。</p>
    <p><a href="session_destroy.php">セッションを破棄</a>してみましょう。</p>
</body>

</html>
