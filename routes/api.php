<?php

use App\Http\Controllers\Api\ShowAllData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// public routes 
Route::get('/about', [ShowAllData::class, 'showAbout']);
Route::get('/contact', [ShowAllData::class, 'showContact']);
Route::get('/experience', [ShowAllData::class, 'showExperience']);
Route::get('/details/experience', [ShowAllData::class, 'showExperienceDetails']);
Route::get('/header', [ShowAllData::class, 'showHeader']);
Route::get('/portfolio', [ShowAllData::class, 'showPortfolio']);
Route::get('/service', [ShowAllData::class, 'showService']);
Route::get('/details/service', [ShowAllData::class, 'showServiceDetails']);
Route::get('/testimonial', [ShowAllData::class, 'showTestimonial']);