<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        return view('backend.testimonial.index');
    }
    public function add(Request $request){
        Testimonial::newTestimonial($request);
        return back()->with('msg', 'Testimonial added successfully...!');
    }
    public function manage(){
        $testimonials = Testimonial::all();
        return view('backend.testimonial.manage', compact('testimonials'));
    }
    public function edit(String $id){
        $testimonial = Testimonial::find($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }
    public function update(Request $request, String $id){
        Testimonial::updateTestimonial($request, $id);
        return redirect(route('manage.testimonial'))->with('msg', 'Testimonial updated successfully...!');
    }
    public function show(String $id){
        $testimonial = Testimonial::find($id);
        return view('backend.testimonial.show', compact('testimonial'));
    }
    public function delete(String $id){
        Testimonial::deleteTestimonial($id);
        return back()->with('error', 'Testimonial deleted successfully...!');
    }
}
