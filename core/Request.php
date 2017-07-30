<?php

/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 31.07.17
 * Time: 0:18
 */
class Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}