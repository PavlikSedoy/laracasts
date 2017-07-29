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
    public static function make($config)
    {
        try {
            return new PDO(
                $config['host'].';dbname=' .$config['name'],
                $config['user'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}