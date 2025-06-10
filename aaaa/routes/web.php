<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Course;
use App\Models\Flight;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;


// Default homepage route to redirect to /stdmg
// Route::get('/', function () {
//     return redirect('/stdmg');
// });


// Route::get('stdmg/', function () {
//     return view('welcome', [
//         'students' => Student::all(),
//         'teachers' => Teacher::all(),
//         'courses' => Course::all(),
//         'test' => Flight::find(15)
//     ]);
// });

// Route::get('stdmg', [HomeController::class, 'index']);

Route::resource('/', HomeController::class);


Route::resource('students', StudentController::class);

Route::resource('teachers', TeacherController::class);

Route::resource('courses', CourseController::class);
