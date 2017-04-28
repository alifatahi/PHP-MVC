<?php

/**
 * first we make connection then we use method to insert
 * then we choose table to insert
 */
$app['database']->insert('users',[
   'name' => $_POST['name']
]);

//Redirect to index
header('Location: /');