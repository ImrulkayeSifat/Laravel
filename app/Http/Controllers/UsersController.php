<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
class UsersController extends Controller
{
    //php artisan stub:publish
    public function inserRecord()
    {
        $phone = new Phone();
        $phone->phone = "22830282023";
        $user = new User();
        $user->name = "Jennifer";
        $user->email = "weii@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Record has been created";
    }
    public function fetchPhoneByUser($id)
    {
        $phone = User::find($id)->phone;
        return $phone;
    }
}
