<?php

//separacion de responsabilidades, esto es un controlador y se llama a una "vista"
// en el controlador, se establecen las propiedades que necesita la view

$greetings = "Hello you ! " . (htmlspecialchars($_GET['name']) ? htmlspecialchars($_GET['name']) : "user");


require("index.view.php");