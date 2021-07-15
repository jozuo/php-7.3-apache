<pre>
<?php

$items = ["山田", "掛田",  "日尾", "本多", "矢吹"];
$items[] = "山口";
array_push($items, "武田");

print $items[3];
print_r($items);
?>
</pre>

<pre>
<?php
$members = [
    "山田" => "太郎",
    "掛谷" => "翔大",
    "日尾" => "のび太",
    "本多" => "のぞみ",
    "矢吹" => "久美子",
];

$members["山口"] = "海事";
print $members["本多"];
print_r($members)
?>

</pre>

<pre>
<?php
$items = [
    "apple" => "リンゴ",
    "orange" => "ミカン",
    "peach" => "モモ",
];
print_r($items);
?>
</pre>
