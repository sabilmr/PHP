<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepository;

function testShowTodolist(): void
{
    $todolistRepository = new \Repository\TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new \Service\TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodolist(): void
{
    $todolistRepository = new \Repository\TodolistRepositoryImpl();

    $todolistService = new \Service\TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $todolistRepository = new \Repository\TodolistRepositoryImpl();

    $todolistService = new \Service\TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();
//
    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();
//
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
}

testRemoveTodolist();