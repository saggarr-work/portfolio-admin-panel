<?php

namespace App\Http\Controllers;

class HeaderController extends Controller
{
    public function index()
    {
        return view('backend.header.index');
    }

    public function show()
    {
        return view('backend.header.show');
    }
}
