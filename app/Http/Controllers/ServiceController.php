<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('backend.service.index');
    }

    public function add(Request $request){
        Service::newService($request);
        return back()->with('msg', 'Service added successfully...!');
    }

    public function manage(){
        $services = Service::all();
        return view('backend.service.manage', compact('services'));
    }

    public function edit(String $id){
        $service = Service::find($id);
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, String $id){
        Service::updateService($request, $id);
        return redirect(route('manage.service'))->with('msg', 'Service updated successfully...!');
    }

    public function delete(String $id){
        Service::deleteService($id);
        return back()->with('error', 'Service deleted successfully...!');
    }
}
