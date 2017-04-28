<?php

/**
 * first we make connection then we use method to insert
 * then we choose table to insert
 */
App::get('database')->insert('users',[
   'name' => $_POST['name']
]);

//Redirect to index
header('Location: /');