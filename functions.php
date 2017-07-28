<?php
/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 28.07.17
 * Time: 23:30
 */

/**
 * @return PDO
 */
function connectToDb()
{
    try {
        return $pdo = new PDO('mysql:host=127.0.0.1;dbname=testcms', 'testcms', '45nhigf8');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

/**
 * @param $pdo
 * @return mixed
 */
function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

/**
 * @param $data
 */
function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}