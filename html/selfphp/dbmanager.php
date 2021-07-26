<?php

declare(strict_types=1); ?>
<?php

function getDb(): PDO
{
  $dsn = 'mysql:dbname=selfphp; host=db; charset=utf8';
  $username = 'selfphp';
  $password = 'selfphp';
  $db = new PDO($dsn, $username, $password, [PDO::ATTR_PERSISTENT => true]);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $db;
}
