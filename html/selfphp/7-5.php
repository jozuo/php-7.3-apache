<?php

declare(strict_types=1)
?>

<?php
require __DIR__ . '/vendor/autoload.php';

// クライアント生成
$client = new GuzzleHttp\Client(['base_uri' => 'https://wings.msn.to/']);

// リクエスト送信
$response = $client->get('/tmp/sample.txt');
print $response->getBody();

print '<br>';
print '<br>';

?>


<?php
print '<br>';
print '<br>';
$response = $client->post('/tmp/post.php', ['form_params' => ['name' => '佐々木真之介']]);
print $response->getBody();
?>

<pre>
<?php
$client = new GuzzleHttp\Client(['base_uri' => 'https://wings.msn.to']);
$response = $client->get('/tmp/books.json');
$body = $response->getBody()->getContents();
$obj = json_decode($body, false);
// print_r($obj);
print($obj->books[0]->title);

print '<br>';
print '<br>';
$obj2 = json_decode($body, true);
// print_r($obj2);
print($obj2['books'][1]['title'])

?>
</pre>

<pre>
<?php
$today = new DateTime();
print("today: {$today->format('Y年m月d日')}");
print PHP_EOL;

$lastday = new DateTime();
$lastday->add(new DateInterval('P1M'));
$lastday->setDate((int)$lastday->format('Y'), (int) $lastday->format('m'), 1);
$lastday->sub(new DateInterval('P1D'));
print("lastday: {$lastday->format('Y年m月d日')}");
print PHP_EOL;

$after = new DateTime();
$after->add(new DateInterval('P1M10D'));
print("after: {$after->format('Y年m月d日')}");

?>
</pre>
