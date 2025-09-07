<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

route::get('/',[StudentController::class,'showStudents']);
