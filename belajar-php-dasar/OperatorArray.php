<?php

$first = [
    "first_name" => "Sabilla",
];

$last = [
    "last_name" => "Rayhan",
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Sabilla",
    "last_name" => "Rayhan",
];

$b = [
    "last_name" => "Rayhan",
    "first_name" => "Sabilla",
];

var_dump($a == $b);
var_dump($a === $b);
