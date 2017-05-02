<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

/**
 * load our router
 */
 Router::load('routes.php')
    ->direct(Request::uri(),Request::method());
