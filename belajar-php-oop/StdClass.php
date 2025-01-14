<?php

//konversi array ke object
$array = [
    "firstName" => "Sabilla",
    "middleName" => "Muhammad",
    "lastName" => "Rayhan",
];

$object = (object)$array;

var_dump($object);

echo "FirstName: $object->firstName" . PHP_EOL;
echo "MiddleName: $object->middleName" . PHP_EOL;
echo "LastName: $object->lastName" . PHP_EOL;

//kebalikan convert object e array
$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "data/Person.php";

$porson = new Person("Sabilla","Ciamis");
var_dump($porson);

$arrayPerson = (array) $porson;
var_dump($arrayPerson);
