<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYgAkanDipanggil = "foo";
$functionYgAkanDipanggil();

$functionYgAkanDipanggil = "bar";
$functionYgAkanDipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Sabilla", "sampleFunction");
sayHello("Sabilla", "strtoupper");
sayHello("Sabilla", "strtolower");
