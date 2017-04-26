<?php

$app = [];
/**
 * make our config as array
 */
$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

/**
 * make our db connect as array
 */
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);