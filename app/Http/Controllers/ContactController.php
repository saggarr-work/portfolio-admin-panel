<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index(){
        return view('backend.contact.index');
    }
    public function show(){
        return view('backend.contact.show');
    }
}
