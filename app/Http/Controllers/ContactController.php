<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('backend.contact.index');
    }
    public function add(Request $request){
        $contactCount = Contact::count();
        if($contactCount > 0){
            return back()->with('error', 'Contact infoes are already there. you can update that or delete that to add a new one...!');
        }else{
            Contact::newContact($request);
            return back()->with('msg', 'Contact info added successfully...!');
        }
        
    }
    public function manage(){
        $contacts = Contact::all();
        return view('backend.contact.manage', compact('contacts'));
    }
    public function edit(String $id){
        $contact = Contact::find($id);
        return view('backend.contact.edit', compact('contact'));
    }
    public function update(Request $request, String $id){
        Contact::updateContact($request, $id);
        return redirect(route('manage.contact'))->with('msg', 'Contact info updated successfully');
    }
    public function show(String $id){
        $contact = Contact::find($id);
        return view('backend.contact.show', compact('contact'));
    }
    public function delete(String $id){
        Contact::deleteContact($id);
        return back()->with('error', 'Contact info deleted successfully...!');
    }
    
}
