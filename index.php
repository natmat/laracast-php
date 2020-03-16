<?php

$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

// Something to try; mapping over the $tasks
// $tasks = array_map(function ($task) {
//     // return ('foo');
//     // return new Task();
//     $t = new Task();
//     $t->description = $task['description'];
//     return ($t);

// }, $tasks);

die(var_dump(tasks));

require 'index.view.php';
