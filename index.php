<?php

require "functions.php";

echo "PHP PDO";

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname:test', 'root', '');
} catch (PDOException $e) {
    die('Could not connect');
}

#require 'index.view.php';
