<?php

namespace App\Http\Controllers;

class ServiceDetailsController extends Controller
{
    public function index(){
        return view('backend.service.details.index');
    }
}
