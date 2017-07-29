<?php

/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 29.07.17
 * Time: 14:05
 */
class QueryBuilder
{
    private $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}