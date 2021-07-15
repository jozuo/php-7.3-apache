<?php

$name = htmlspecialchars($_GET["name"], ENT_QUOTES);

echo "お名前は".$name."です。";
