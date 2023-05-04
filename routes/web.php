<?php

use App\Models\Student;
use App\Models\Department;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('base');
});


Route::get('departments', function () {
    $departments =Department::get();
    return view ('Departments' , ['departments' => $departments]);
});


Route::resource('students',StudentController::class);