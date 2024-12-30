<?php

$firstName = "Sabilla";
$lastName = "Rayhan";

$anonymousFunction = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();

echo $arrowFunction();