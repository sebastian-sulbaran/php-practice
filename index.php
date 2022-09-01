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

//creating a class

class Task {
    // we can obtain properties to our class from the tables and its columns
    protected $description;
    protected $completed = false;

    //the constructor function will be excecuted always when a new instance is called, we can pass parameters
    public function __construct($description)
    {
        $this->description = $description;
    }

    //implementing getters and setters
    public function complete()
    {
        $this->completed = true;
    }

    public function isCompleted()
    {
        return $this->completed;
    }
    //funtions within classes are called methods
    public function description()
    {
        return $this->description;
    }

}

// we create an array of tasks and the new keywords instantiate a class into an objects
$todo_list = [
    new Task("Go to the store"),
    new Task("Finish Lesson"),
    new Task("Correct tests"),
    new Task("Do nothing")
];
//dd($todo_list);
//import the view file
require("index.view.php");