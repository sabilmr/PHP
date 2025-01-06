<?php

require_once "data/Person.php";

$budi = new Person("Budi", "Surabaya");
$budi->name = "Budi";
$budi->sayHello("Rayhan");

$sabilla = new Person("Sabilla",null);
$sabilla->name = "Sabilla";
$sabilla->sayHello(null);

$budi->info();
$sabilla->info();