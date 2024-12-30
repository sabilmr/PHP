<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Sabilla");
addTodoList("Muhammad");
addTodoList("Rayhan");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

viewShowTodoList();