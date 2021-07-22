<pre>
<?php

$data = [1, 2, 3, 4];
[$a, $b] = $data;
print "\$a: {$a}, \$b: {$b}\n";

list($c, $d) = $data;
print "\$c: {$c}, \$d: {$d}\n";


[$e,,, $f] = $data;
print "\$e: ${e}, \$f: ${f}\n";

$map = ["title" => "独習Python", "price" => 3000, "hoge" => 123];
["title" => $title, "price" => $price] = $map;
print "title: ${title}\n";
print "price: ${price}\n";

$items = [1, 2, [32, 32, 33]];
[$a, $b, $c] = $items;

print_r($a);
print_r($b);
print_r($c);

print "\n";

[$x, $y, [$z1, $z2, $z3]] = $items;
print "${x}\n";
print "${y}\n";
print "${z1}\n";
print "${z2}\n";
print "${z3}\n";

$value = "";
print $value ?: "空です。";
?>
</pre>

<pre>
<?php
$x = 1;
$flag = ($x === 1) ? 0 : -1;
print "\$flag: {$flag}";
?>
</pre>

<pre>
<?php
$result = `ls -la`;
print $result;
?>
</pre>

<pre>
<?php
$data = ["apple" => "リンゴ"];
print $data["apple"] ?? "残念"
?>
</pre>

<pre>
<?php
for ($i = 1; $i < 10; $i++) {
  for ($j = 1; $j < 10; $j++) {
    $result = $i * $j;
    print "{$result} ";
  }
  print "\n";
}
?>
</pre>

<pre>
<?php

$value = 0;
print "エルビス演算子(?:) " . ($value ?: "hogehoge");
print "\n";
print "Null合体演算子(??) :" . ($value ?? "hogehoge");
?></pre>

<pre>
<?php
$value = array(3 => 1);
print "エルビス演算子(?:) " . ($value[1] ?: "hogehoge");
print "\n";
print "Null合体演算子(??) :" . ($value[1] ?? "hogehoge");
?>
</pre>
