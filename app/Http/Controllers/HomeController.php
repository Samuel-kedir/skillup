<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CourseSyllabus;
use App\Models\Event;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\TestimonialSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $teams = TeamMember::all();
        $testimonials = Testimonial::all();
        $testimonialSection = TestimonialSection::first();
        $courses = CourseSyllabus::with('category')->get();
        $banners = Banner::all();


        // dd($courses);
        return view('welcome', compact('events','testimonials','testimonialSection','courses','banners','teams'));
    }
}
