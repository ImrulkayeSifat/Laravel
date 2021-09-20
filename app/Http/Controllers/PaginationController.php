<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PaginationController extends Controller
{
    //php artisan stub:publish
    public function allUsers()
    {
        $users = User::paginate(10);
        return view('all_users',compact('users'));
    }
}
