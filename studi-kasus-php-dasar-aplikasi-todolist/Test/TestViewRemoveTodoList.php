<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Sabilla");
addTodoList("Muhammad");
addTodoList("Rayhan");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

showTodoList();

viewRemoveTodoList();

showTodoList();
