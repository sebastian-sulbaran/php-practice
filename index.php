<?php

require("functions.php");
require("Task.php");
$greetings = "Hello you, " . (htmlspecialchars($_GET['name']) ? htmlspecialchars($_GET['name']) : "user");

//trabajando con arreglos

$animals = [
    'Dog',
    'Cat',
    'Guanaco',
    'Beaver',
    'Condor'
];

//adding a new value for a array
$animals[] = "Penguin";

$tasks = [
    "title" => "Go to the market",
    "due" => "Tomorrow",
    "assigned_to" => "El menetz",
    "completed" => false,
    "delayed" => true

];

//adding a new value for a associative array

$tasks['description'] = "Go and buy some fruits";

$age = 31;

// dd($age); // function from external file
/*
if we want to print a structured data we can use var_dump() function. We can also use <pre></pre> tags to give it format
*/

//creating a class

//we use the required task class
// we create an array of tasks and the new keywords instantiate a class into an objects
$todo_list = [
    new Task("Go to the store"),
    new Task("Finish Lesson"),
    new Task("Correct tests"),
    new Task("Do nothing")
];
//dd($todo_list);


$pdo = connectDb();

$task_list = fetchAllTasks($pdo);
//  dd($task_list);
//import the view file
require("index.view.php");