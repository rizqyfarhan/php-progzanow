<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist() {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[] = "Belajar PHP";
    $todolistRepository->todolist[] = "Belajar PHP OOP";
    $todolistRepository->todolist[] = "Belajar PHP Database";

    $todolistService = new TodolistServiceImpl($todolistRepository);
    
    $todolistService->showTodolist();
}

testShowTodolist();