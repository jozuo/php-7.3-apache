<pre>
<?php
$str = "WINGSプロジェクト";
print "len: " . mb_strlen($str);
print "<br>";
print "width: " . mb_strwidth($str);
?>
</pre>

<pre>
<?php
$data1 = "wings project";
$data2 = "ＷＩＮＧＳプロジェクト";
$data3 = "Fußball";

print mb_convert_case($data1, MB_CASE_UPPER) . "\n";
print mb_convert_case($data1, MB_CASE_LOWER) . "\n";
print mb_convert_case($data1, MB_CASE_TITLE) . "\n";

print "\n";

print mb_convert_case($data2, MB_CASE_LOWER) . "\n";

print "\n";

print mb_convert_case($data3, MB_CASE_UPPER) . "\n";
print mb_convert_case($data3, MB_CASE_UPPER_SIMPLE) . "\n";
?>
</pre>

<pre>
<?php
$str = "にわにはにわにわとりがいる";
print str_replace("にわ", "ニワ", $str, $cnt) . "\n";
print "{$cnt}個置き換えました。"
?>

</pre>
