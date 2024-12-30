<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Sabilla");
addTodoList("Muhammad");
addTodoList("Rayhan");

var_dump($todoList);
