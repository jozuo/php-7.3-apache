<?
declare(strict_types=1);
?>
<?php
foreach ($_SERVER as $key => $value) {
  if (strpos(strtolower($key), 'accept_language')) {
    print("value: {$value}");
  }
}
?>
