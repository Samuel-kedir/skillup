<?php

namespace App\Http\Controllers;

use App\Models\CourseSyllabus;
use App\Models\Event;
use App\Models\Testimonial;
use App\Models\TestimonialSection;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $testimonials = Testimonial::all();
        $testimonialSection = TestimonialSection::first();
        $courses = CourseSyllabus::with('category')->get();


        // dd($courses);
        return view('welcome', compact('events','testimonials','testimonialSection','courses'));
    }
}
