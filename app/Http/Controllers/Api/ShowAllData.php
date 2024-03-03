<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\ExperienceDteails;
use App\Models\Header;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceDetails;
use App\Models\Testimonial;

class ShowAllData extends Controller
{
    public function showAbout()
    {
        $about = About::all();
        $data = [
            'status' => 200,
            'about' => $about
        ];
        return response()->json($data, 200);
    }
    public function showContact(){
        $contact = Contact::all();
        $data = [
            'status' => 200,
            'contact' => $contact
        ];
        return response()->json($data, 200);
    }
    public function showExperience(){
        $experience = Experience::all();
        $data = [
            'status' => 200,
            'experience' => $experience
        ];
        return response()->json($data, 200);
    }
    public function showExperienceDetails(){
        $experienceDetails = ExperienceDteails::all();
        $data = [
            'status' => 200,
            'experienceDetails' => $experienceDetails
        ];
        return response()->json($data, 200);
    }
    public function showHeader(){
        $header = Header::all();
        $data = [
            'status' => 200,
            'header' => $header
        ];
        return response()->json($data, 200);
    }
    public function showPortfolio(){
        $portfolio = Portfolio::all();
        $data = [
            'status' => 200,
            'portfolio' => $portfolio
        ];
        return response()->json($data, 200);
    }
    public function showService(){
        $service = Service::all();
        $data = [
            'status' => 200,
            'service' => $service
        ];
        return response()->json($data, 200);
    }
    public function showServiceDetails(){
        $serviceDetails = ServiceDetails::all();
        $data = [
            'status' => 200,
            'serviceDetails' => $serviceDetails
        ];
        return response()->json($data, 200);
    }
    public function showTestimonial(){
        $testimonial = Testimonial::all();
        $data = [
            'status' => 200,
            'testimonial' => $testimonial
        ];
        return response()->json($data, 200);
    }    
}
