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
        Portfolio::updatePortfolio($request, $id);
        return redirect(route('manage.portfolio'))->with('msg', 'Portfolio updated successfully...!');
    }

    public function show(String $id){
        $portfolio = Portfolio::find($id);
        return view('backend.portfolio.show', compact('portfolio'));
    }

    public function delete(String $id){
        Portfolio::deletePortfolio($id);
        return back()->with('error', 'Portfolio deleted successfully...!');
    }
}
