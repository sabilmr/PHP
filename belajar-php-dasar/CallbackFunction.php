<?php

function sayHello(string $name, callable $filter)
{
    $firstName = call_user_func($filter, $name);
    echo "Hello $firstName" . PHP_EOL;
}

sayHello("Sabilla", "strtoupper");
sayHello("Sabilla", "strtolower");
sayHello("Sabilla", function (string $name): string {
    return strtoupper($name);
});
sayHello("Sabilla", fn($name) => strtoupper($name));
