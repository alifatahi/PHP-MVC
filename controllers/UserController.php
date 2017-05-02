<?php

class UserController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users',['users' => $users]);
    }

    public function store()
    {

        /**
         * first we make connection then we use method to insert
         * then we choose table to insert
         */
        App::get('database')->insert('users',[
            'name' => $_POST['name']
        ]);

        //Redirect to index
        return redirect('users');
    }
}