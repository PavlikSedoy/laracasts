<?php
/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 29.07.17
 * Time: 14:14
 */

require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make()
);