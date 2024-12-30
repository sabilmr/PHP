<?php

$name = "Sabilla Muhammad Rayhan";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 10 . PHP_EOL;

//konvensi string ke number
$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

//ngakses karakter
$name = "Sabilla";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
echo $name[6] . PHP_EOL;
//variable parsing
echo "Hello $name Selamat Belajar PHP Dasar" . PHP_EOL;

//curly brace
$var = "Var";
echo "This is {$var}s" . PHP_EOL;