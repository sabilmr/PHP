<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Sabilla";
$manager->sayHello("Mawar");

$vp = new VicePresident();
$vp->name = "Rayhan";
$vp->sayHello("Billa");