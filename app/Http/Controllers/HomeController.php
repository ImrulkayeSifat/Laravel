<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// php artisan make:controller HomeController
class HomeController extends Controller
{
    //
    public function index($name=null){
        return 'Hi from HomeController '.$name;
    }
}
