<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('backend.about.index');
    }

    public function add(Request $request){
        // validation 
        $this->validate($request, [
            'experience'    => 'required|numeric|gte:0|lt:100',
            'client'        => 'required|numeric|gte:0|lt:10000',
            'project'       => 'required|numeric|gte:0|lt:10000',
            'photo'         => 'required|image',
            'description'   => 'required|max:5000'
        ], [
            'experience.required'   => 'This field is required',
            'experience.numeric'    => 'This field can only contain numbers',
            'experience.gte'        => 'This field can not be negative',
            'experience.lt'         => 'Experience must be less than 100 years',
            'client.required'       => 'This field is required',
            'client.numeric'        => 'This field can only contain numbers',
            'client.gte'            => 'This field can not be negative',
            'client.lt'             => 'Total clients must be less than 10,000',
            'project.required'      => 'This field is required',
            'project.numeric'       => 'This field can only contain numbers',
            'project.gte'           => 'This field can not be negative',
            'project.lt'            => 'Total projects must be less than 10,000',
            'photo.required'        => 'This field is required',
            'photo.image'           => 'Photo must be in image file format (jpg, jpeg, png etc.)',
            'description.required'  => 'This field is required'
        ]);

        // logic & input 
        $aboutCount = About::count();
        if ($aboutCount > 0) {
            return back()->with('error', 'About infoes are already there. you can update that or delete that to add a new one...!');
        } else {
            About::newAbout($request);
            return back()->with('msg', 'About info added succesfully...!');
        }
    }

    public function manage(){
        $about = About::all();
        return view('backend.about.manage', compact('about'));
    }

    public function edit(String $id){
        $about = About::find($id);
        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, String $id){
        // validation 
        $this->validate($request, [
            'experience'    => 'required|numeric|gte:0|lt:100',
            'client'        => 'required|numeric|gte:0|lt:10000',
            'project'       => 'required|numeric|gte:0|lt:10000',
            'photo'         => 'image',
            'description'   => 'required|max:5000'
        ], [
            'experience.required'   => 'This field is required',
            'experience.numeric'    => 'This field can only contain numbers',
            'experience.gte'        => 'This field cannot be negative',
            'experience.lt'         => 'Experience must be less than 100 years',
            'client.required'       => 'This field is required',
            'client.numeric'        => 'This field can only contain numbers',
            'client.gte'            => 'This field cannot be negative',
            'client.lt'             => 'Total clients must be less than 10,000',
            'project.required'      => 'This field is required',
            'project.numeric'       => 'This field can only contain numbers',
            'project.gte'           => 'This field cannot be negative',
            'project.lt'            => 'Total projects must be less than 10,000',
            'photo.image'           => 'Photo must be in image file format (jpg, jpeg, png etc.)',
            'description.required'  => 'This field is required'
        ]);

        // input 
        About::updateAbout($request, $id);
        return redirect(route('manage.about'))->with('msg', 'About info updated successfully...!');
    }

    public function show(String $id){
        $about = About::find($id);
        return view('backend.about.show', compact('about'));
    }

    public function delete(String $id){
        About::deleteAbout($id);
        return redirect(route('about'))->with('msg', 'About info deleted successfully');
    }
}
