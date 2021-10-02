<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function settings()
    {
        return view('user.settings');
    }

    public function search()
    {
        return view('user.search');
    }

    public function cart()
    {
        return view('user.cart');
    }

}
