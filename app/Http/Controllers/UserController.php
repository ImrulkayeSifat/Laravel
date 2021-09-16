<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        // $name='sifat';
        // $users = array(
        //     "name"=>"sifat",
        //     "email"=>"imrul52@student.sust.edu",
        //     "phone"=>"01736011747"
        // );
        // return view('user',compact('name','users'));
        
            // return $request->method();
            // return $request->path();
            // return $request->url();
            return $request->fullUrl();
        
    }
}
