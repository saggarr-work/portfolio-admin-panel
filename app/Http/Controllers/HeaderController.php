<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        return view('backend.header.index');
    }

    public function add(Request $request)
    {
        $headerCount = Header::count();
        if ($headerCount > 0) {
            return back()->with('error', 'Header infoes are already there. you can update that or delete that to add a new one...!');
        } else {
            Header::newHeader($request);
            return back()->with('msg', 'Header Infoes added successfully...!');
        }
    }

    public function manage()
    {
        $header = Header::all();
        return view('backend.header.manage', compact('header'));
    }

    public function edit(String $id){
        $header = Header::find($id);
        return view('backend.header.edit', compact('header'));
    }

    public function update(Request $request, String $id){
        Header::updateHeader($request, $id);
        return redirect(route('manage.header'))->with('msg', 'Congrats, Header updated successfully...!');
    }

    public function show(String $id){
        $header = Header::find($id);
        return view('backend.header.show', compact('header'));
    }

    public function delete(String $id){
        Header::deleteHeader($id);
        return redirect(route('header'))->with('msg', 'Header info deleted successfully...!');
    }
}
