<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('backend.experience.index');
    }

    public function add(Request $request)
    {
        // validation 
        $this->validate($request, [
            'fieldOfExperience' => 'required|max:255|regex:/[^\d]+/'
        ], [
            'fieldOfExperience.required'    => 'This field is required',
            'fieldOfExperience.regex'       => 'This field cannot contain only numbers'
        ]);

        // check the database if there is any existing name with same name i am giving
        $existingExperience = Experience::where('fieldOfExperience', $request->fieldOfExperience)
            ->first();

        // logic & input 
        if ($existingExperience) {
            return back()->with('error', 'This experience already exists, please add a new one...!');
        } else {
            Experience::newExperience($request);
            return back()->with('msg', 'Experience added successfully...!');
        }
    }

    public function manage()
    {
        $experience = Experience::all();
        return view('backend.experience.manage', compact('experience'));
    }

    public function edit(String $id)
    {
        $experience = Experience::find($id);
        return view('backend.experience.edit', compact('experience'));
    }

    public function update(Request $request, String $id)
    {
        // validation 
        $this->validate($request, [
            'fieldOfExperience' => 'required|max:255|regex:/[^\d]+/'
        ], [
            'fieldOfExperience.required'    => 'This field is required',
            'fieldOfExperience.regex'       => 'This field cannot contain only numbers'
        ]);

        // check the database if there is any existing name with same name i am giving except the selected one 
        $existingExperience = Experience::where('fieldOfExperience', $request->fieldOfExperience)
            ->where('id', '!=', $id)
            ->first();

        // logic & input 
        if ($existingExperience) {
            return back()->with('error', 'This experience already exists, please add a new one...!');
        } else {
            Experience::updateExperience($request, $id);
            return redirect(route('manage.experience'))->with('msg', 'Experience updated successfully...!');
        }
    }

    public function delete(String $id)
    {
        Experience::deleteExperience($id);
        return back()->with('msg', 'Experience deleted successfully...!');
    }
}
