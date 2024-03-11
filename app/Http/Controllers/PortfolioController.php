<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('backend.portfolio.index');
    }

    public function add(Request $request){
        // vlidation 
        $this->validate($request, [
            'thumbnail'     => 'required|image',
            'title'         => 'required|max:5000',
            'githubLink'    => 'nullable|max:5000|url',
            'liveDemo'      => 'required|max:5000|url'
        ], [
            'thumbnail.required'    => 'This field is required',
            'thumbnail.image'       => 'Thumbnail must be in image file format (jpg, jpeg, png etc.)',
            'title.required'        => 'This field is required',
            'githubLink.url'        => 'Please enter a valid link',
            'liveDemo.required'     => 'This field is required',
            'liveDemo.url'          => 'Please enter a valid link',
        ]);

        // input 
        Portfolio::newPortfolio($request);
        return back()->with('msg', 'Portfolio added successfully...!');
    }

    public function manage(){
        $portfolios = Portfolio::all();
        return view('backend.portfolio.manage', compact('portfolios'));
    }

    public function edit(String $id){
        $portfolio = Portfolio::find($id);
        return view('backend.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, String $id){
        // vlidation 
        $this->validate($request, [
            'thumbnail'     => 'image',
            'title'         => 'required|max:5000',
            'githubLink'    => 'nullable|max:5000|url',
            'liveDemo'      => 'required|max:5000|url'
        ], [
            'thumbnail.image'       => 'Thumbnail must be in image file format (jpg, jpeg, png etc.)',
            'title.required'        => 'This field is required',
            'githubLink.url'        => 'Please enter a valid link',
            'liveDemo.required'     => 'This field is required',
            'liveDemo.url'          => 'Please enter a valid link',
        ]);
        
        // input 
        Portfolio::updatePortfolio($request, $id);
        return redirect(route('manage.portfolio'))->with('msg', 'Portfolio updated successfully...!');
    }

    public function show(String $id){
        $portfolio = Portfolio::find($id);
        return view('backend.portfolio.show', compact('portfolio'));
    }

    public function delete(String $id){
        Portfolio::deletePortfolio($id);
        return back()->with('msg', 'Portfolio deleted successfully...!');
    }
}
