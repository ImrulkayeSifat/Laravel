<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManaController extends Controller
{
    //php artisan stub:publish
    public function create()
    {
        return view('usermanagement');
    }
}
