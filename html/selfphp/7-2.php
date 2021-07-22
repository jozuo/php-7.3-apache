<pre>
<?php
$now = new DateTime();
print $now->format('Y年m月d日 H:i:s');
?></pre>

<pre>
<?php
$now = new DateTime('2021/07/22 10:50:31');
print $now->format('Y/m/d H:i:s');
?></pre>

<pre>
<?php
$dt1 = new DateTime(null, new DateTimeZone("Asia/Tokyo"));
print $dt1->format('Y/m/d H:i:s');

print PHP_EOL;

$dt2 = new DateTime(null, new DateTimeZone('UTC'));
print $dt2->format(DATE_RSS);
?></pre>

<pre>
<?php
$fmt = 'Y年m月d日 H時i分s秒';
$time = '2021年05月15日 11時58分32秒';

$dt = DateTime::createFromFormat($fmt, $time);
print $dt->format(DATE_ISO8601);

print PHP_EOL;

$dt->add(new DateInterval('P1Y1M1DT1H1M1S'));
print $dt->format(DATE_ISO8601);

print PHP_EOL;

$dt->sub(new DateInterval('P2Y2M2DT3H3M3S'));
print $dt->format(DATE_ISO8601);
?></pre>

<pre>
<?php
$dt1 = new DateTime('2021/10/01 00:00:00');
print 'date1: ';
print $dt1->format(DATE_ISO8601);

print PHP_EOL;

$dt2 = clone $dt1;
$dt2->add(new DateInterval('PT10M'));

print 'date2: ';
print $dt2->format(DATE_ISO8601);

print PHP_EOL;

$interval = $dt2->diff($dt1, false);
print 'diff: ';
print $interval->format('%R%Y年%M月%d日 %H時間%I分%S秒');
?></pre>

<pre>
<?php
function calendar(int $year, int $month): void
{
  for ($index = 1; $index <= 31; $index++) {
    if (checkdate($month, $index, $year)) {
      print $index . " ";
    }
  }
}
calendar(2024, 2);
?></pre>

<pre>
<?php
$str = '2021年12月04日';
$dt = DateTime::createFromFormat('Y年m月d日', $str, new DateTimeZone("Asia/Tokyo"));
print $dt->format('Y/m/d(D)')
?></pre>
