<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StController extends Controller
{
    //php artisan stub:publish
    public function fetchStudents()
    {
        // $students = Student::all();
        $students = Student::where('id',3)->get();
        return $students;
    }
}
