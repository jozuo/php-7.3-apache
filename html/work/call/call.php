<?php

declare(strict_types=1); ?>
<?php

namespace call;

require_once '../vendor/autoload.php';

use asia\japan\kanto\tokyo\Bird;
use asia\japan\kanto\tokyo\Pref;

$pref = new Pref();
$bird = new Bird();
$now = new \DateTime();

print "pref: {$pref->getPref()}<br>";
print "bird: {$bird->getBird()}<br>";
print "date: {$now->format(DATE_ISO8601)}";
