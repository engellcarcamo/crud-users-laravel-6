<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Joel',
            'Fernando',
            'Maria',
            'Huber',
            'Marvin',
            'Albert',
            'Freddy',
            'Engels',
            '<script>alert("I hacked you")</script>'

        ];
        $title = 'User list';
        return view('user', compact('users', 'title'));
    }

    public function show($id)
    {
        return "showing user detail: $id";
    }

    public function create()
    {
        return 'Create a new user';
    }


    public function edit($id)
    {
        return "Edit the user with id: $id";
    }

}
