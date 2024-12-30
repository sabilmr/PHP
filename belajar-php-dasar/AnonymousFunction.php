<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Sabilla");
$sayHello("Rayhan");

function sayGoodbye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}
//cara 1
sayGoodbye("Sabilla", function (string $name): string {
    return strtoupper($name);
});
//cara 2
$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodbye("Sabilla", $filterFunction);

$first = "Sabilla";
$last = "Rayhan";

$sayHelloSabil = function () use ($first, $last) {
    echo "Hello $first $last" . PHP_EOL;
};
$sayHelloSabil();
