<?php

use App\Core\App;

//make instance of config
App::bind('config',require 'config.php');


//make db connection
App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

//make method to return view
function view($name,$data =[]){
    //now extract is make things like:
    // 'name' => 'ali' to $name = ali
    extract($data);
    return require "app/views/{$name}.view.php";
}

// method to redirect
function redirect($path){
    header("Location: /{$path}");
}
