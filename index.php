<?php

require 'Task.php';
require 'database/QueryBuilder.php';
require 'database/Connection.php';

// $pdo = Connection::make();
$pdo = new Connection();
$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

require 'index.view.php';
