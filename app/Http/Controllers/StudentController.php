<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudents(){
        $students = DB::table('students')
            ->select('students.*','cities.city_name')
            ->join('cities', 'students.city_id', '=', 'cities.id')
            ->select('students.*', 'cities.city_name')
            ->get();
       // return $students;
        return view('welcome', compact('students'));
    }
}
