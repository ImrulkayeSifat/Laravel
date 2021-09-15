<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    //
    public function index()
    {
        echo '<h1>Fluent String</h1>';
        $slice = Str::of('hi i am from bangladesh')->after('hi');
        echo $slice.'<br>';

        $slice2 = Str::of('he\is\from\india')->afterLast('\\');
        echo $slice2.'<br>';

        $string = Str::of('Hello')->append('world!');
        echo $string. '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replaced = Str::of('laravel 7.0')->replace('7.0','8.0');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted . '<br>';

        $slug = Str::of('laravel 8 framework')->slug('-');
        echo $slug . '<br>';

        $str = Str::of('laravel framework')->substr(8,5);
        echo $str . '<br>';

        $str2 = Str::of('/laravel/')->trim('/');
        echo $str2 . '<br>';

        $str3 = Str::of('laravel')->upper();
        echo $str3;
    }
}
