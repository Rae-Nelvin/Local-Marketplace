<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            return view('admin.dashboard');
        }else if(Auth::user()->hasRole('user')){
            return view('user.dashboard');
        }
    }

}