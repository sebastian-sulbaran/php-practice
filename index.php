<?php

require("functions.php");

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

//import the view file
require("index.view.php");