<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers', $teachers);
    }
    public function create()
    {
        return view('teachers.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message', 'Teacher Added!');
    }
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show')->with('teacher', $teacher);
    }
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teacher', $teacher);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        Teacher::find($id)->update($input);
        return redirect('teachers')->with('flash_message', 'Teacher Updated!');
    }

    public function destroy($id)
    {
        Teacher::find($id)->delete();
        return redirect('teachers')->with('flash_message', 'Teacher Deleted!');
    }
}
