<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Sabilla");
$person->hello("Rayhan");

$person->name ="Rojak";
var_dump($person);

$person->run();
