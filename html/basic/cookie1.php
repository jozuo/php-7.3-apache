<?php
setcookie("value", 100);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Cookie" />
    <link rel="icon" type="image/svg+xml" href="../../favicon.svg" />
    <link rel="stylesheet" href="../../reset.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.scss" />
    <title>Cookie</title>
</head>

<body>
    <?php
    $value = $_COOKIE["value"] ?? "";
    print "このページ1のクッキー値は「{$value}」です。<br/>";
    ?>
    <a href="cookie2.php">ページ2</a>
</body>

</html>
