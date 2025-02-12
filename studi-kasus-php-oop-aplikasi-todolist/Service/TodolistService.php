<?php

namespace Service;

use Entity\Todolist;
use Repository\TodolistRepository;

interface TodolistService
{
    function showTodolist(): void;

    function addTodolist(string $todo): void;

    function removeTodolist(int $number): void;
}

class TodolistServiceImpl implements TodolistService
{
    private TodolistRepository $todolistRepository;

    /**
     * @param TodolistRepository $todolistRepository
     */
    public function __construct(TodolistRepository $todolistRepository)
    {
        $this->todolistRepository = $todolistRepository;
    }


    function showTodolist(): void
    {
        echo "TODOLIST" .PHP_EOL;
        $todolist = $this->todolistRepository->findAll();
        foreach ($todolist as $number => $value) {
            echo "$number. ". $value->getTodo() .PHP_EOL;
        }
    }

    function addTodolist(string $todo): void
    {
        $todolist = new Todolist($todo);
        $this->todolistRepository->save($todolist);
        echo "SUCCESS MENAMBAHKAN TODOLIST" . PHP_EOL;
    }

    function removeTodolist(int $number): void
    {
        if ($this->todolistRepository->remove($number)) {
            echo "SUCCESS MENGHAPUS TODOLIST" . PHP_EOL;
        } else {
            echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
        }
    }
}