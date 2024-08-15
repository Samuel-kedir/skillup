<?php

namespace App\Http\Controllers;

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
        return view('welcome', compact('events','testimonials','testimonialSection'));
    }
}
