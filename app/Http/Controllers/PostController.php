<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    //php artisan stub:publish
    public function getAllPost()
    {
        $posts=DB::table('post')->get();
        return view('posts',compact('posts'));
    }
}
