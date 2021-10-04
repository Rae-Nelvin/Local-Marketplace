<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{    
    /**
     * Products page
     *
     * @return void
     */
    public function products()
    {
        return view('admin.products');
    }
}
