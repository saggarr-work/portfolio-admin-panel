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
        // validation 
        $this->validate($request, [
            'avatar'    => 'required|image',
            'name'      => 'required|max:255',
            'review'    => 'required|max:5000',
        ], [
            'avatar.required'   => 'This field is required',
            'avatar.image'      => 'Avatar must be in image file format (jpg, jpeg, png etc.)',
            'name.required'     => 'This field is required',
            'review.required'   => 'This field is required'
        ]);

        // input 
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
        // validation 
        $this->validate($request, [
            'avatar'    => 'image',
            'name'      => 'required|max:255',
            'review'    => 'required|max:5000',
        ], [
            'avatar.required'   => 'This field is required',
            'avatar.image'      => 'Avatar must be in image file format (jpg, jpeg, png etc.)',
            'name.required'     => 'This field is required',
            'review.required'   => 'This field is required'
        ]);

        // input 
        Testimonial::updateTestimonial($request, $id);
        return redirect(route('manage.testimonial'))->with('msg', 'Testimonial updated successfully...!');
    }

    public function show(String $id){
        $testimonial = Testimonial::find($id);
        return view('backend.testimonial.show', compact('testimonial'));
    }

    public function delete(String $id){
        Testimonial::deleteTestimonial($id);
        return back()->with('msg', 'Testimonial deleted successfully...!');
    }
}
