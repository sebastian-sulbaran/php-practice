<?php

require 'Task.php';

$task_list = $app['database']->selectAll("todos");

$task_list = array_map(function ($task){
        $t = new Task($task->description, $task->completed);
        return $t;
    }, $task_list);
    

require("views/index.view.php");
