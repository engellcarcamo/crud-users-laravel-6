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
        return view('users.index', compact('users', 'title'));
    }

    public function show($id)
    {
        return view('users.show', compact('id'));
    }

    public function create()
    {   
        return view('users.create');
    }


    public function edit($id)
    {
        return view('users.edit', compact('id'));
    }
}
