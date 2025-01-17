<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Sabilla", "Muhammad", "Rayhan");
//sayHello("Sabilla", "Rayhan"); //error
//versi 8
sayHello(first: "Sabilla", middle: "Muhammad", last: "Rayhan");
sayHello(first: "Sabilla", last: "Rayhan");
