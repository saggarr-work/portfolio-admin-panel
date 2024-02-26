<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index(){
        return view('backend.portfolio.index');
    }

    public function show(){
        return view('backend.portfolio.show');
    }
}
