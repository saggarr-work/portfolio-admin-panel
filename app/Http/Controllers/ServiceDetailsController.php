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
        // validation 
        $this->validate($request, [
            'service_id'    => 'required',
            'heading'       => 'required|max:255',
            'description'   => 'required|max:5000'
        ], [
            'service_id.required'   => 'This field is required',
            'heading.required'      => 'This field is required',
            'description.required'  => 'This field is required'
        ]);

        // check 
        $existingHeading = ServiceDetails::where('heading', $request->heading)
        ->where('service_id', $request->service_id)
        ->first();

        // logic & input 
        if($existingHeading){
            return back()->with('error', 'There is a same heading in the database for this service...!');
        }else{
            ServiceDetails::newServiceDetails($request);
            return back()->with('msg', 'Service details added successfully...!');
        }
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
        // validation 
        $this->validate($request, [
            'service_id'    => 'required',
            'heading'       => 'required|max:255',
            'description'   => 'required|max:5000'
        ], [
            'service_id.required'   => 'This field is required',
            'heading.required'      => 'This field is required',
            'description.required'  => 'This field is required'
        ]);

        // check 
        $existingHeading = ServiceDetails::where('heading', $request->heading)
        ->where('service_id', $request->service_id)
        ->where('id', '!=', $id)
        ->first();

        // logic & input 
        if($existingHeading){
            return back()->with('error', 'There is a same heading in the database for this service...!');
        }else{
            ServiceDetails::updateServiceDetails($request, $id);
            return redirect(route('manage.details.service'))->with('msg', 'Service details updated successfully...!');
        }
    }

    public function show(String $id){
        $serviceDetail = ServiceDetails::find($id);
        return view('backend.service.details.show', compact('serviceDetail'));
    }

    public function delete(String $id){
        ServiceDetails::deleteServiceDetails($id);
        return back()->with('msg', 'Service details deleted sucessfully...!');
    }
}
