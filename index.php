<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

/**
 * load our router
 */
require Router::load('routes.php')
    ->direct(Request::uri(),Request::method());
