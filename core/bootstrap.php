<?php

//make instance of config
App::bind('config',require 'config.php');


//make db connection
App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
));



//$app = [];
///**
// * make our config as array
// */
//$app['config'] = require 'config.php';
//
///**
// * make our db connect as array
// */
//$app['database'] = new QueryBuilder(
//    Connection::make($app['config']['database'])
//);