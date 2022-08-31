<?php

$greetings = "Hello you, " . (htmlspecialchars($_GET['name']) ? htmlspecialchars($_GET['name']) : "user");

//trabajando con arreglos

$animals = [
    'Dog',
    'Cat',
    'Guanaco',
    'Beaver',
    'Condor'
];

//import the view file
require("index.view.php");