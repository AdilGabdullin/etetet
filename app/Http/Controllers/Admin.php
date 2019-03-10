<?php

namespace App\Http\Controllers;

use App\User;

class Admin extends Controller
{
    public function index()
    {
        return view('admin', ['users' => User::simplePaginate(10)]);
    }
}
