<?php

require_once __DIR__ . '/vendor/autoload.php';

use Programmerzamannow\BelajarPhpComposer\Data\People;

$people = new People("Sabilla");

echo $people->sayHello("Budi") . PHP_EOL;
