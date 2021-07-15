<pre>
<?php
$data = ["one", "two", "three"];
print count($data) . "\n";

$data = [
    ["x-1", "x-2", "x-3"],
    ["y-1", "y-2", "y-3"],
    ["z-1", "z-2", "z-3"],
];
print count($data) . "\n";
print count($data, COUNT_RECURSIVE) . "\n";

$data = ['い', 'ろ', 'は', 'に', 'ほ', 'へ', 'と', 'い', 'ろ'];
print_r(array_count_values($data));

$array1 = [1, 3, 5];
$array2 = [2, 4, 6];
print_r(array_merge($array1, $array2));


// 配列マージ
$assoc1 = ['apple' => 'red', 'orange' => 'yellow', 'melon' => 'green'];
$assoc2 = ['grape' => 'purple', 'apple' => 'green', 'strawberry' => 'red'];

// - キー重複時は後勝ち
$result = array_merge($assoc1, $assoc2);
print_r($result);

// - キー重複時は配列
$result2 = array_merge_recursive($assoc1, $assoc2);
print_r($result2);

// 配列の結合
$data = ['PHP', 'Perl', 'Ruby', 'Python', 'JavaScript'];
print implode(',', $data);

?></pre>

<pre>
<?php
$data = [1, 2, 3];
$result = array_map(function ($v) {
    return $v * $v;
}, $data);
print_r($result);
?></pre>

<pre>
<?php
$data1 = [1, 3, 5, 6];
$data2 = [2, 7, 10];

$result = array_map(function ($v1, $v2) {
    return $v1 * $v2;
}, $data1, $data2);

print_r($result);
?>

</pre>
