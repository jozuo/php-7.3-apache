<pre>
<?php
$value = 75;
if ($value > 90) {
  $result = "優";
} elseif ($value > 75) {
  $result = "良";
} elseif ($value > 50) {
  $result  = "可";
} else {
  $result = "不可";
}
print $result;
?>
</pre>

<pre>
<?php
$books = [
  ['独習Python', 3000],
  ['独習Java', 2980],
  ['独習C#', 3600],
];

foreach ($books as [$title, $price]) {
  print "{$title} ({$price}円)\n";
}
?></pre>


<pre>
<?php
$books = [
  '独習Python' => 3000,
  '独習Java' => 2980,
  '独習C#' => 3600,
];

foreach ($books as $title => $price) {
  print "{$title} ({$price}円)\n";
}
?>
</pre>

<pre>
<?php
$books = [
  ['title' => '独習Python', 'price' => 3000],
  ['title' => '独習Java', 'price' => 2980],
  ['title' => '独習C#', 'price' => 3600],
];

foreach ($books as ['title' => $title, 'price' => $price]) {
  print "{$title} ({$price}円)\n";
}
?>
</pre>
