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
        // validation 
        $this->validate($request, [
            'emailUsername'         => 'required|max:255',
            'directEmailLink'       => 'required|max:5000',
            'messengerUsername'     => 'required|max:255',
            'directMessengerLink'   => 'required|max:5000|url',
            'whatsappUsername'      => 'required|max:255',
            'directWhatsappLink'    => 'required|max:5000|url',
        ],[
            'emailUsername.required'        => 'This field is required',
            'directEmailLink.required'      => 'This field is required',
            'messengerUsername.required'    => 'This field is required',
            'directMessengerLink.required'  => 'This field is required',
            'directMessengerLink.url'       => 'Please enter a valid link',
            'whatsappUsername.required'     => 'This field is required',
            'directWhatsappLink.required'   => 'This field is required',
            'directWhatsappLink.url'        => 'Please enter a valid link',
        ]);

        // logic & input 
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
        // validation 
        $this->validate($request, [
            'emailUsername'         => 'required|max:255',
            'directEmailLink'       => 'required|max:5000',
            'messengerUsername'     => 'required|max:255',
            'directMessengerLink'   => 'required|max:5000|url',
            'whatsappUsername'      => 'required|max:255',
            'directWhatsappLink'    => 'required|max:5000|url',
        ],[
            'emailUsername.required'        => 'This field is required',
            'directEmailLink.required'      => 'This field is required',
            'messengerUsername.required'    => 'This field is required',
            'directMessengerLink.required'  => 'This field is required',
            'directMessengerLink.url'       => 'Please enter a valid link',
            'whatsappUsername.required'     => 'This field is required',
            'directWhatsappLink.required'   => 'This field is required',
            'directWhatsappLink.url'        => 'Please enter a valid link',
        ]);

        // input 
        Contact::updateContact($request, $id);
        return redirect(route('manage.contact'))->with('msg', 'Contact info updated successfully');
    }

    public function show(String $id){
        $contact = Contact::find($id);
        return view('backend.contact.show', compact('contact'));
    }
    
    public function delete(String $id){
        Contact::deleteContact($id);
        return back()->with('msg', 'Contact info deleted successfully...!');
    }
}
