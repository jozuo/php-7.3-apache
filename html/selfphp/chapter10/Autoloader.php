<?php

declare(strict_types=1); ?>
<?php
spl_autoload_register(function (string $name) {
  require_once "{$name}.php";
});
