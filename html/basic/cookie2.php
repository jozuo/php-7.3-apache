<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page2</title>
</head>

<body>
    <?php
    $value = $_COOKIE["value"];
    print "このページ2のクッキー値は「{$value}」です。<br/>";
    ?>
    <a href="cookie1.php">ページ1に戻る</a>
</body>

</html>
