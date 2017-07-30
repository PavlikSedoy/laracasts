<?php
/**
 * Created by PhpStorm.
 * User: sedoy
 * Date: 29.07.17
 * Time: 14:14
 */

$app = [];

$app['config'] = require 'config.php';

require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'] )
);