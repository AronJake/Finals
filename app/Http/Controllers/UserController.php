<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowUserlist(){


        $users = User::all();

        return view('users', compact('users'));
    }
}
