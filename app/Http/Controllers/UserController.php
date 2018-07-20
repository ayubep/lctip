<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.index');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function competition()
    {
        // return view('user.');
    }

    public function throwback()
    {
        // return view('user.');
    }

    public function newsUpdate()
    {
        // return view('user.');
    }

    public function login()
    {
        // return view('user.');
    }

}
