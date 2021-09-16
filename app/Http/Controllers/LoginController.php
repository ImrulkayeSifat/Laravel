<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //php artisan stub:publish
    public function index()
    {
        return view('login');
    }

    public function loginSubmit(Request $req)
    {
        // return "Form Submitted";
        $email = $req->input('email');
        $password = $req->input('password');
        // return $req->all();
        return 'Email : '.$email.' Password : '.$password;
    }
}
