<?php

/**
 * Declare our Route
 */
$router->get('','PageController@home');
$router->get('about','PageController@about');
$router->get('contact','PageController@contact');

