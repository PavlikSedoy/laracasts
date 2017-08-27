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
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}