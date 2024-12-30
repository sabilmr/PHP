<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Sabilla");
addTodoList("Muhammad");
addTodoList("Rayhan");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
