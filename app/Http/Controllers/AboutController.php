<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('backend.about.index');
    }

    public function add(Request $request){
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
