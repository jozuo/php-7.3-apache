<?php

declare(strict_types=1); ?>
<?php

require_once './TriangleFigure.php';

$tri = new TriangleFigure();
$tri->setBase(100);
$tri->setHeight(200);
print "三角形の面積: {$tri->getArea()}";
