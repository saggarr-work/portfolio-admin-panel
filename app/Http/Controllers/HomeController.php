<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index(){
        $fieldOfService = Service::all();
        $countFieldOfService = count($fieldOfService);
        $portfolio = Portfolio::all();
        $countPortfolio = count($portfolio);
        $testimonial = Testimonial::all();
        $countTestimonial = count($testimonial);
        return view('backend.home.home', compact(
            'countFieldOfService', 
            'countPortfolio',
            'countTestimonial'
        ));
    }
}
