<?php

declare(strict_types=1);
?>
<?php
//header("Location: http://172.27.41.110:8080/selfphp/chapter08/req_headers.php");
$host = $_SERVER["HTTP_HOST"];
$path = dirname($_SERVER["PHP_SELF"]);
$url = "http://{$host}{$path}/req_headers.php";
header("Location: {$url}");
?>

