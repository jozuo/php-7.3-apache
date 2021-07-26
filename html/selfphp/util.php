<?php

declare(strict_types=1); ?>

<?php
function redirect(string $filename): void
{
  $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $filename;
  header("Location: {$url}");
}
?>
