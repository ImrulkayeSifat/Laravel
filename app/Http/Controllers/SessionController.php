<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //php artisan stub:publish
    public function getSessionData(Request $req)
    {
        if($req->session()->has('name'))
        {
            echo $req->session()->get('name');
        }
        else
        {
            echo "no data in session";
        }
    }
    public function storeSession(Request $req)
    {
        $req->session()->put('name','sifat');
        echo "data added to session";
    }

    public function deleteSessionData(Request $req)
    {
        $req->session()->forget('name');
        echo "data has been removed from session";
    }
}
