<?php
/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 29.07.17
 * Time: 14:14
 */

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'] )
);