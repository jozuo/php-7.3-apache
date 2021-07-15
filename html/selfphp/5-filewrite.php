<?php
// 書き込み内容を配列にセット
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$data[] = $_SERVER['HTTP_REFERER'];

// access.logを追記書き込みモードでオープン
$file = @fopen('access.log', 'a') or die('ファイルを開けませんでした!');
// ファイルをロック
flock($file, LOCK_EX);
// ファイルへの書き込み
fwrite($file, implode("\t", $data) . "\n");
// ロック解除
flock($file, LOCK_UN);
// ファイルクローズ
fclose($file);
print 'アクセスログを記録しました。';
