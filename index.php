<?php

require "functions.php";

$greeting = 'Hello World'; // <?php echo"...

class Task
{
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        echo "ctor";
        $this->description = $description;
    }

    public function description()
    {
        return $this->description;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

    public function complete()
    {
        $hits->completed = true;
    }
}

$task = [
    new Task('Exercise'), // This is the description
    new Task('Running'),
    new Task('Cycling'),
];

$task[0] . complete();

// dd($task);

require 'index.view.php';
