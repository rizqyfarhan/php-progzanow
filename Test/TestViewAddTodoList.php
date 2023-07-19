<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("ben");
addTodoList("james");
addTodoList("lorenzo");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();

