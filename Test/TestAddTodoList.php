<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("James");
addTodoList("Ben");
addTodoList("Costa");

var_dump($todoList);