<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ExperienceDteailsController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\TestimonialController;
use App\Models\Experience;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('backend.home.home');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // for header 
    Route::get('/header', [HeaderController::class, 'index'])->name('header');
    Route::post('/header', [HeaderController::class, 'add'])->name('add.header');
    Route::get('/header/manage', [HeaderController::class, 'manage'])->name('manage.header');
    Route::get('/header/{id}/edit', [HeaderController::class, 'edit'])->name('edit.header');
    Route::patch('/header/{id}/update', [HeaderController::class, 'update'])->name('update.header');
    Route::get('/header/{id}/show', [HeaderController::class, 'show'])->name('show.header');
    Route::post('/header/{id}/delete', [HeaderController::class, 'delete'])->name('delete.header');

    // for about 
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::post('/about', [AboutController::class, 'add'])->name('add.about');
    Route::get('/about/manage', [AboutController::class, 'manage'])->name('manage.about');
    Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('edit.about');
    Route::patch('/about/{id}/update', [AboutController::class, 'update'])->name('update.about');
    Route::get('/about/{id}/show', [AboutController::class, 'show'])->name('show.about');
    Route::post('/about/{id}/delete', [AboutController::class, 'delete'])->name('delete.about');

    // for experience 
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::post('/experience', [ExperienceController::class, 'add'])->name('add.experience');
    Route::get('/experience/manage', [ExperienceController::class, 'manage'])->name('manage.experience');
    Route::get('/experience/{id}/edit', [ExperienceController::class, 'edit'])->name('edit.experience');
    Route::patch('/experience/{id}/update', [ExperienceController::class, 'update'])->name('update.experience');
    Route::post('/experience/{id}/delete', [ExperienceController::class, 'delete'])->name('delete.experience');
    Route::get('/experience/details', [ExperienceDteailsController::class, 'index'])->name('details.experience');

    // for services
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/services/show', [ServiceController::class, 'show'])->name('show.services'); 
    Route::get('/service/details', [ServiceDetailsController::class, 'index'])->name('details.service');

    // for portfolio 
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/show', [PortfolioController::class, 'show'])->name('show.portfolio');

    // for testimonial 
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('/testimonial/show', [TestimonialController::class, 'show'])->name('show.testimonials');

    // for contact 
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/contact/show', [ContactController::class, 'show'])->name('show.contact');
   
});

require __DIR__ . '/auth.php';
