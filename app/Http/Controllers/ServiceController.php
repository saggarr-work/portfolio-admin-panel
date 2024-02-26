<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index(){
        return view('backend.service.index');
    }

    public function show(){
        return view('backend.service.show');
    }
}
