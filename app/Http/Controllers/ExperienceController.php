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

    public function add(Request $request){
        Experience::newExperience($request);
        return back()->with('msg', 'Experience added...!');
    }

    public function manage()
    {
        $experience = Experience::all();
        return view('backend.experience.manage', compact('experience'));
    }

    public function edit(String $id){
        $experience = Experience::find($id);
        return view('backend.experience.edit', compact('experience'));
    }

    public function update(Request $request, String $id){
        Experience::updateExperience($request, $id);
        return redirect(route('manage.experience'))->with('msg', 'Experience updated successfully');
    }

    public function delete(String $id){
        Experience::deleteExperience($id);
        return back()->with('error', 'Experience deleted successfully...!');
    }
}
