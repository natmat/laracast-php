<?php

class Connection
{
    private $host = 'localhost';
    private $db = 'mytodo';
    private $user = 'root';
    private $pwd = '';
    private $pdo;

    public function __construct()
    {
        // try {
        //     $this->_pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $pwd);
        // } catch (PDOExeption $e) {
        //     die($e->getMessage());
        // }
        $host = '127.0.0.1';
        $db = 'mytodo';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int) $e->getCode());
        }

    }

    public static function make()
    {
        try {
            $db = 'mytodo';
            $user = 'root';
            $pwd = '';
            $pdo = new PDO('mysql:dbname=' . $db . '; host=127.0.0.1', $user);
            return $pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
