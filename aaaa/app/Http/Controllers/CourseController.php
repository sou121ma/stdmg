<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    //Validations for input fields
    public function checkValid(Request $request)
    {

        return $request->validate(
            [
                'name' => 'required',
                // 'course_duration' => ['required', 'integer', 'min:1'],
                'course_duration' => 'required|integer|min:1',
            ],
            [
                'name.required' => "Please enter the course name",
                'course_duration.required' => "Please enter the course duration"
            ]
        );
    }


    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    //  Show the form for creating a new resource.
    public function create()
    {
        return view('courses.create');
    }

    //  Store a newly created resource in storage.
    public function store(Request $request)
    {
        //checking 
        $this->checkValid($request);

        $course = Course::create($request->all());

        return redirect('courses')->with('flash_message', "Course successfully added!");

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view("courses.edit")->with("course", $course);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->checkValid($request);
        $course = Course::find($id);
        $course->update($request->all());
        return redirect('courses')->with('flash_message', "Course successfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('flash_message', "Course successfully deleted!");
    }
}
