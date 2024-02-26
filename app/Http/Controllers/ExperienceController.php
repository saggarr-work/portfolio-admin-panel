<?php

namespace App\Http\Controllers;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('backend.experience.index');
    }

    public function show()
    {
        return view('backend.experience.show');
    }
}
