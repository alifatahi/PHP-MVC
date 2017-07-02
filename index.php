<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

//in PHP 7.0 we can do this use App\Core\{Router,Request};
use App\Core\Router;
use App\Core\Request;

/**
 * load our router
 */
 Router::load('app/routes.php')
    ->direct(Request::uri(),Request::method());
