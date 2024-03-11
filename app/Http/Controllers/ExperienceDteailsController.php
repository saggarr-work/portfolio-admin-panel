<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceDteails;
use Illuminate\Http\Request;

class ExperienceDteailsController extends Controller
{
    public function index(){
        $experiences = Experience::all();
        return view('backend.experience.details.index', compact('experiences'));
    }

    public function add(Request $request){
        // validation 
        $this->validate($request, [
            'experience_id'     => 'required',
            'languageOrTools'   => 'required|max:255',
            'levelOfExperience' => 'required',
        ], [
            'experience_id.required'        => 'This field is required',
            'languageOrTools.required'      => 'This field is required',
            'levelOfExperience.required'    => 'This field is required',
        ]);

        // checking 
        $existingLanguageOrTools = ExperienceDteails::where('languageOrTools', $request->languageOrTools)
        ->where('experience_id', $request->experience_id)
        ->first();

        // logic and input 
        if($existingLanguageOrTools){
            return back()->with('error', 'There is a same record in the database for this field of experience...!');
        }else{
            ExperienceDteails::newExperienceDetails($request);
            return back()->with('msg', 'New experience details added for the experience...!');
        }
    }

    public function manage(){
        $experienceDetails = ExperienceDteails::all();
        return view('backend.experience.details.manage', compact('experienceDetails'));
    }

    public function edit(String $id){
        $experienceDetails = ExperienceDteails::find($id);
        $experience = Experience::all();
        return view('backend.experience.details.edit', compact('experienceDetails', 'experience'));
    }

    public function update(Request $request, String $id){
        // validation 
        $this->validate($request, [
            'experience_id'     => 'required',
            'languageOrTools'   => 'required|max:255',
            'levelOfExperience' => 'required',
        ], [
            'experience_id.required'        => 'This field is required',
            'languageOrTools.required'      => 'This field is required',
            'levelOfExperience.required'    => 'This field is required',
        ]);

        // checking 
        $existingLanguageOrTools = ExperienceDteails::where('languageOrTools', $request->languageOrTools)
        ->where('experience_id', $request->experience_id)
        ->where('id', '!=', $id)
        ->first();
        
        // logic and input 
        if($existingLanguageOrTools){
            return back()->with('error', 'There is a same record in the database for this field of experience...!');
        }else{
            ExperienceDteails::updateExperienceDetails($request, $id);
            return redirect(route('manage.details.experience'))->with('msg', 'Experience details updated sucessfully...!');
        }
    }

    public function delete(String $id){
        ExperienceDteails::deleteExperienceDetails($id);
        return back()->with('msg', 'Experience details deleted successfully...!');
    }
}
