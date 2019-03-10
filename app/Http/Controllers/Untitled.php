<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class Untitled extends Controller
{
    public function test(Request $request)
    {
        return view('test');
    }
}
