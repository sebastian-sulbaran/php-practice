<?php

class Task {
    // we can obtain properties to our class from the tables and its columns
    protected $description;
    protected $completed = false;

    //the constructor function will be excecuted always when a new instance is called, we can pass parameters
    public function __construct($description = null, $completed = null)
    {
        //the new keyword references the parameters in the class
        if (func_get_args() != null) {
            $this->description = $description;
            $this->completed = $completed;
        }

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