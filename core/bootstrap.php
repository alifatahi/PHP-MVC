<?php

$app = [];
/**
 * make our config as array
 */
$app['config'] = require 'config.php';

/**
 * make our db connect as array
 */
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);