<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);
$name = ["Sabilla", "Muhammad", "Rayhan"];
var_dump($name);

var_dump($name[0]);

$name[0] = "Billa";
var_dump($name);

unset($name[1]);
var_dump($name);

$name[] = "Erika";
var_dump($name);

var_dump(count($name));

//map di array
$sabilla = array(
    "id" => "sabilla",
    "name" => "Sabilla Muhammad Rayhan",
    "age" => 21,
);
var_dump($sabilla);

var_dump($sabilla["name"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 25,
];
var_dump($budi);

//array di dalam array
$sabilla = array(
    "id" => "sabilla",
    "name" => "Sabilla Muhammad Rayhan",
    "age" => 21,
    "address" => array(
        "city" => "Surabaya",
        "country" => "Indonesia",
    )
);
var_dump($sabilla);

var_dump($sabilla["id"]);
var_dump($sabilla["address"]["city"]);
var_dump($sabilla["address"]["country"]);

//contoh array dalam array yg kedua
$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 25,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia",
    ]
];
var_dump($budi);
var_dump($budi["name"]);
var_dump($budi["address"]["city"]);
var_dump($budi["address"]["country"]);




