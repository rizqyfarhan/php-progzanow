<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Lucas");
addTodoList("Suarez");
addTodoList("Guillherme");
addTodoList("Jorginho");
addTodoList("Pedro");

showTodoList();

removeTodoList(3);

showTodoList();
