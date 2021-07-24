<?php

declare(strict_types=1)
?>

<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="SelfPHP"');
  print('この画面へのアクセスは認められませんでした。');
  die();
} else {
  // 認証の成否に応じて対応するメッセージを表示
  if ($_SERVER['PHP_AUTH_USER'] === 'admin_user' && $_SERVER['PHP_AUTH_PW'] === 'admin_pass') {
    print('正しく認証が行われました。');
  } else {
    print('ユーザー名、またはパスワードが間違っています。');
  }
}
