<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Sabilla");
var_dump($company);

$company->programmer = new BackendProgrammer("Sabilla");
var_dump($company);

$company->programmer = new FrontendProgrammer("Sabilla");
var_dump($company);

sayHelloProgrammer(new Programmer("Sabilla"));
sayHelloProgrammer(new BackendProgrammer("Sabilla"));
sayHelloProgrammer(new FrontendProgrammer("Sabilla"));
