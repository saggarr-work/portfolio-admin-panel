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
        ExperienceDteails::newExperienceDetails($request);
        return back()->with('msg', 'New experience details added for the experience...!');
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
        ExperienceDteails::updateExperienceDetails($request, $id);
        return redirect(route('manage.details.experience'))->with('msg', 'Experience details updated sucessfully...!');
    }

    public function delete(String $id){
        ExperienceDteails::deleteExperienceDetails($id);
        return back()->with('error', 'Experience details deleted successfully...!');
    }
}
