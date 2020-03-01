<?php

function connectToDB()
{
    try
    {
        return new PDO('mysql:host=127.0.0.1,dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage);
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare("select @ from ($table)");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

// echo param and die
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die();
    echo '</pre>';
};
