<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>チェックボックス</title>
</head>

<body>
  <form action="check2.php" method="POST">
    あなたがよく使用する言語は?<br />
    <input type="checkbox" name="lang[]" id="php" value="PHP" />
    <label for="php">PHP</label>
    <input type="checkbox" name="lang[]" id="java" value="JAVA" />
    <label for="java">java</label>
    <input type="checkbox" name="lang[]" id="csharp" value="C#" />
    <label for="csharp">csharp</label>
    <input type="submit" value="送信">
  </form>
</body>

</html>
