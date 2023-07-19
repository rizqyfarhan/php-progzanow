<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("james");
addTodoList("rodri");
addTodoList("pedro");

viewShowTodoList();