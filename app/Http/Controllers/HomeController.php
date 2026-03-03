<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::active()->take(8)->get();
        $testimonials = Testimonial::active()->take(5)->get();

        return view('frontend.home', compact('events', 'testimonials'));
    }
}
