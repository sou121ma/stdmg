<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        // $validated= $request.
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student Added!');
    }
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student', $student);
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    //Updating student
    public function update(Request $request, $id)
    {
        $input = $request->all();
        Student::find($id)->update($input);
        return redirect('students')->with('flash_message', 'Student Updated!');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect('students')->with('flash_message', 'Student Deleted!');
    }

}
