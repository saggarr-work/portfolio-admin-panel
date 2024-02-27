<?php

namespace App\Http\Controllers;

class TestimonialController extends Controller
{
    public function index(){
        return view('backend.testimonial.index');
    }

    public function show(){
        return view('backend.testimonial.show');
    }
}
