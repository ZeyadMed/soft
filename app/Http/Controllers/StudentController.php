<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::get();
        return view ('students.index' , ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::get();
        return view ('students.create' , ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request -> validate([
            'name'=>'required',
            'code'=>'required',
            'email'=>'required',
            'password'=>'required',
            'department_id'=>'required',
            'semester'=>'required'
    
        ]);
        Student::create($formFields);
    
        return Redirect::route('students.index')->with ('status' , 'Added Succssfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $student = Student::where('id', '=' , $id)->with('department')-> first();

        return view ('students.show' , ['student' => $student ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $departments = Department::get();
        return view ('students.edit' , ['student' => $student , 'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $formFields = $request -> validate([
            'name'=>'required',
            'code'=>'required',
            'email'=>'required',
            'password'=>'required',
            'department_id'=>'required',
            'semester'=>'required'
    
        ]);
        $student->update($formFields);
        return Redirect::route('students.show' , $student->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return Redirect::route('students.index')->with('status' , 'Deleted Successfully');
    }
}
