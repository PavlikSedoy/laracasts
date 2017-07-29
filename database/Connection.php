<?php

/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 29.07.17
 * Time: 13:55
 */

class Connection
{
    /**
     * @return PDO
     */
    public static function make()
    {
        try {
            return $pdo = new PDO('mysql:host=127.0.0.1;dbname=testcms', 'testcms', '45nhigf8');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}