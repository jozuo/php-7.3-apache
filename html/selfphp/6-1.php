<?php

declare(strict_types=1)
?>

<?php
require_once __DIR__ . '/6-included.php'
?>

<pre>
<?php
$base = 8;
$height = 10;
$area = $base * $height / 2;
print "3角形の面積は{$area}です。\n";
?>
</pre>

<pre>
<?php

$area = getTriangleArea(8, 10);
print "3角形の面積は{$area}です。\n"
?>
</pre>

<pre>
<?php
function hoge(?int $value): void
{
    var_dump($value);
}

print hoge(100);
print hoge(null);
// print hoge(); //エラー


?>
</pre>

<pre>
<?php
$result = getDiamondArea(10, 20);
print "菱形: {$result}"
?>
</pre>

<pre>
<?php
function total(float ...$args): float
{
    return array_reduce($args, function ($result, $value) {
        return $result += $value;
    }, 0);
}

print "トータル" . total(10, 20, 30);
?>
</pre>

<pre>
<?php
function myArrayWalk(array $array, callable $func): void
{
    foreach ($array as $key => $value) {
        print "key: {$key}, value: {$value}\n";
        $func($key, $value);
    }
}

$data = ['apple' => 100, 'orange' => 50, 'pine' => 10, 'banana' => 5];
$result = 0;
myArrayWalk($data, function ($key, $value) use (&$result) {
    $result += $value;
});

print "トータル: {$result}";
?></pre>

<pre>
<?php
function readLines(string $path)
{
    $file = fopen($path, 'rb') or die('ファイルが見つかりません');
    while ($line = fgets($file, 1024)) {
        yield $line;
    }
    fclose($file);
}
function readFiles(string ...$files)
{
    foreach ($files as $file) {
        // `yield from`にするのが重要
        yield from readLines($file);
    }
}

foreach (readFiles("2-2.php", "2-4.php") as $line) {
    print $line;
}
?></pre>
