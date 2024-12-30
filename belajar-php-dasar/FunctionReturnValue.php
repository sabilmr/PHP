<?php

function sum(int $first, int $last) : int
{
    $total = $first + $last;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

function getFinalValue(int $value) : string
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
    //tidak akan diekskusi karna udah menggunakan return
    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(2);
var_dump($score);