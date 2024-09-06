<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseSyllabus; // Ensure this matches your model namespace

class CourseController extends Controller
{
    public function show($slug)
    {
        // Find the course by slug
        $courseSyllabus = CourseSyllabus::where('slug', $slug)->first();



        $courses = CourseSyllabus::select('title', 'slug')->get();

        // Pass the data to the view
        return view('courses.show', compact('courseSyllabus', 'courses', 'slug'));
    }
}
