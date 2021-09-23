<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablerController extends Controller
{
    //php artisan stub:publish
    public function create()
    {
        return view('dashboardTabler');
    }
}
