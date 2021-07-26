<?php

declare(strict_types=1); ?>
<?php
// アップロードファイルの保存先はドキュメントルート下以外にする
const STORED_DIRECTORY = '/var/www/upload/chapter08/';

const ERROR_MESSAGES = [
  UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を超えています。',
  UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZE制限を超えています。',
  UPLOAD_ERR_PARTIAL => 'ファイルが一部しかアップロードされていません。',
  UPLOAD_ERR_NO_FILE => 'ファイルはアップロードされませんでした。',
  UPLOAD_ERR_NO_TMP_DIR => '一時保存フォルダが存在しません。',
  UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました。',
  UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロード処理が中断されました。',
];
const EXTENSION_LIST = ['gif', 'jpg', 'jpeg', 'png'];
const MEDIA_TYPE_LIST = ['image/gif', 'image/jpg', 'image/jpeg', 'image/png'];
const FIELD_NAME = 'upfile';
?>

<?php
if ($_FILES[FIELD_NAME]['error'] !== UPLOAD_ERR_OK) {
  $err_msg = ERROR_MESSAGES[$_FILES[FIELD_NAME]['error']] ?? '想定外エラーです。';
} elseif (!in_array(strtolower(pathinfo($_FILES[FIELD_NAME]['name'])['extension']), EXTENSION_LIST)) {
  $err_msg = '画像ファイル以外はアップロードできません。';
} elseif (!in_array(finfo_file(finfo_open(FILEINFO_MIME_TYPE), $_FILES[FIELD_NAME]['tmp_name']), MEDIA_TYPE_LIST)) {
  $err_msg = 'ファイルの内容が画像ではありません。';
} else {
  $src = $_FILES[FIELD_NAME]['tmp_name'];
  $dest = $_FILES[FIELD_NAME]['name'];

  if (!file_exists(STORED_DIRECTORY)) {
    mkdir(STORED_DIRECTORY);
  }
  if (!move_uploaded_file($src, STORED_DIRECTORY . $dest)) {
    $err_msg = 'アップロード処理に失敗しました。';
  }
}
if (isset($err_msg)) {
  die('<div style="color: red;">' . $err_msg . '</div>');
}
// 処理成功時はフォームにリダイレクト
$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/file1.php';
header("Location: {$url}");

