<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //php artisan stub:publish
    public function create()
    {
        return view('dashboard');
    }
}
