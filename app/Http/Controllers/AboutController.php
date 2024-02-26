<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return view('backend.about.index');
    }

    public function show()
    {
        return view('backend.about.show');
    }
}
