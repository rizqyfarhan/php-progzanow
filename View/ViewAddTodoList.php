<?php

require_once "../Model/TodoList.php";
require_once "../Helper/Input.php";
require_once "../BusinessLogic/AddTodoList.php";

function viewAddTodoList() 
{
    echo "MENAMBAHKAN TODO" . PHP_EOL;

    $todo = input("Todo (0 untuk batal)");

    if ($todo == "0") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}