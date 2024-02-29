<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('backend.service.details.index', compact('services'));
    }

    public function add(Request $request){
        ServiceDetails::newServiceDetails($request);
        return back()->with('msg', 'Service details added successfully...!');
    }

    public function manage(){
        $serviceDetails = ServiceDetails::all();
        return view('backend.service.details.manage', compact('serviceDetails'));
    }

    public function edit(String $id){
        $serviceDetail = ServiceDetails::find($id);
        $services = Service::all();
        return view('backend.service.details.edit', compact('serviceDetail', 'services'));
    }

    public function update(Request $request, String $id){
        ServiceDetails::updateServiceDetails($request, $id);
        return redirect(route('manage.details.service'))->with('msg', 'Service details updated successfully...!');
    }

    public function show(String $id){
        $serviceDetail = ServiceDetails::find($id);
        return view('backend.service.details.show', compact('serviceDetail'));
    }

    public function delete(String $id){
        ServiceDetails::deleteServiceDetails($id);
        return back()->with('error', 'Service details deleted sucessfully...!');
    }
}
