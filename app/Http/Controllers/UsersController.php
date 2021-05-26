<?php

namespace App\Http\Controllers;

use App\Ldap\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();

        //return view('welcome', ['users' => $users]);
        var_dump($users);
    }
}
