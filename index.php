<?php

require("core/bootstrap.php"); //nueva variable global

// dd($_SERVER);


require Router::load('routes.php')->direct(Request::uri());