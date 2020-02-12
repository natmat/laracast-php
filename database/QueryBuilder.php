<?php

class QueryBuilder
{
    protected $pdo;

    protected function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $hits->$pdo->prepare("select * from {$table}");
        $statement->excute;

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
