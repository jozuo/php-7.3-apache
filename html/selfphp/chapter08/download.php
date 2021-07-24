<?php

declare(strict_types=1);
?>

<?php
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="ranking.jpg"');
print file_get_contents('./ranking.jpg');
?>
