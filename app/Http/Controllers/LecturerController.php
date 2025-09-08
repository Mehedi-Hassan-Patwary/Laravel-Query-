<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LecturerController extends Controller
{
        public function showTeacher(){
        $teachers = DB::table('teachers')
            ->select('teachers.*','cities.city_name')
            ->join('cities', 'teachers.city_id', '=', 'cities.id')
            ->select('teachers.*', 'cities.city_name')
            ->get();
       return $teachers;
        //return view('welcome', compact('teachers'));
    }
}
