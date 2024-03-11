<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index(){
        return view('backend.header.index');
    }

    public function add(Request $request){
        // validation 
        $this->validate($request, [
            'fullName'      => 'required|max:255|regex:/^[a-zA-Z0-9\s\-\'",.()]+$/',
            'designation'   => 'required|max:255|regex:/^[a-zA-Z0-9\s\-\'",.()]+$/',
            'cv'            => 'required|mimes:pdf',
            'photo'         => 'required|image',
            'githubLink'    => 'required|max:5000|url',
            'facebookLink'  => 'required|max:5000|url',
            'instagramLink' => 'required|max:5000|url',
            'whatsappLink'  => 'required|max:5000|url'
        ], [
            'fullName.required'         => 'This field is required',
            'fullName.regex'            => 'This field can only contain numbers, letters, spaces & symbols',
            'designation.required'      => 'This field is required',
            'designation.regex'         => 'This field can only contain numbers, letters, spaces & symbols',
            'cv.required'               => 'This field is required',
            'cv.mimes'                  => 'CV must be in pdf format',
            'photo.required'            => 'This field is required',
            'photo.image'               => 'Photo must be in image file format (jpg, jpeg, png etc.)',
            'githubLink.required'       => 'This field Link is required',
            'githubLink.url'            => 'Please enter a valid link',
            'facebookLink.required'     => 'This field is required',
            'facebookLink.url'          => 'Please enter a valid link',
            'instagramLink.required'    => 'This field is required',
            'instagramLink.url'         => 'Please enter a valid link',
            'whatsappLink.required'     => 'This field is required',
            'whatsappLink.url'          => 'Please enter a valid link',
        ]);

        // logic & input 
        $headerCount = Header::count();
        if ($headerCount > 0) {
            return back()->with('error', 'Header infoes are already there. you can update that or delete that to add a new one...!');
        } else {
            Header::newHeader($request);
            return back()->with('msg', 'Header Info added successfully...!');
        }
    }

    public function manage(){
        $header = Header::all();
        return view('backend.header.manage', compact('header'));
    }

    public function edit(String $id){
        $header = Header::find($id);
        return view('backend.header.edit', compact('header'));
    }

    public function update(Request $request, String $id){
        // validation 
        $this->validate($request, [
            'fullName'      => 'required|max:255|regex:/^[a-zA-Z0-9\s\-\'",.()]+$/',
            'designation'   => 'required|max:255|regex:/^[a-zA-Z0-9\s\-\'",.()]+$/',
            'cv'            => 'mimes:pdf',
            'photo'         => 'image',
            'githubLink'    => 'required|max:5000|url',
            'facebookLink'  => 'required|max:5000|url',
            'instagramLink' => 'required|max:5000|url',
            'whatsappLink'  => 'required|max:5000|url'
        ], [
            'fullName.required'         => 'This field is required',
            'fullName.regex'            => 'This field can only contain numbers, letters, spaces & symbols',
            'designation.required'      => 'This field is required',
            'designation.regex'         => 'This field can only contain numbers, letters, spaces & symbols',
            'cv.mimes'                  => 'CV must be in pdf format',
            'photo.image'               => 'Photo must be in image file format (jpg, jpeg, png etc.)',
            'githubLink.required'       => 'This field Link is required',
            'githubLink.url'            => 'Please enter a valid link',
            'facebookLink.required'     => 'This field is required',
            'facebookLink.url'          => 'Please enter a valid link',
            'instagramLink.required'    => 'This field is required',
            'instagramLink.url'         => 'Please enter a valid link',
            'whatsappLink.required'     => 'This field is required',
            'whatsappLink.url'          => 'Please enter a valid link',
        ]);

        // input 
        Header::updateHeader($request, $id);
        return redirect(route('manage.header'))->with('msg', 'Header info updated successfully...!');
    }

    public function show(String $id){
        $header = Header::find($id);
        return view('backend.header.show', compact('header'));
    }

    public function delete(String $id){
        Header::deleteHeader($id);
        return redirect(route('header'))->with('msg', 'Header info deleted successfully...!');
    }
}
