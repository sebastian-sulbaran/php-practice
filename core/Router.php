<?php

class Router 
{

    protected $routes = [];

    public static function load($file)
    {
        $router = new static;
        $routes = require($file);
        $router->register($routes);
        
        return $router;
    }

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {

        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception("No route defined for this URI");
        
    }

}