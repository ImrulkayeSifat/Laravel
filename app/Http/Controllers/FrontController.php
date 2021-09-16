<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //php artisan stub:publish
    public function create()
    {
        return view('sidebar');
    }
}
