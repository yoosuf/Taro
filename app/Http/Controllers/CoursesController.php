<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class CoursesController extends Controller
{
    public function index()
    {

        $courses = Course::all();
        return view('courses.index', compact('courses'));


    }


    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show', compact('course'));
    }
}
