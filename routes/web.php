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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

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

    // for experience & experience details
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::post('/experience', [ExperienceController::class, 'add'])->name('add.experience');
    Route::get('/experience/manage', [ExperienceController::class, 'manage'])->name('manage.experience');
    Route::get('/experience/{id}/edit', [ExperienceController::class, 'edit'])->name('edit.experience');
    Route::patch('/experience/{id}/update', [ExperienceController::class, 'update'])->name('update.experience');
    Route::post('/experience/{id}/delete', [ExperienceController::class, 'delete'])->name('delete.experience');
    Route::get('/experience/details', [ExperienceDteailsController::class, 'index'])->name('details.experience');
    Route::post('/experience/details', [ExperienceDteailsController::class, 'add'])->name('add.details.experience');
    Route::get('/experience/details/manage', [ExperienceDteailsController::class, 'manage'])->name('manage.details.experience');
    Route::get('/experience/details/{id}/edit', [ExperienceDteailsController::class, 'edit'])->name('edit.details.experience');
    Route::patch('/experience/details/{id}/update', [ExperienceDteailsController::class, 'update'])->name('update.details.experience');
    Route::post('/experience/details/{id}/delete', [ExperienceDteailsController::class, 'delete'])->name('delete.details.experience');

    // for services
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::post('/service', [ServiceController::class, 'add'])->name('add.service');
    Route::get('/service/manage', [ServiceController::class, 'manage'])->name('manage.service'); 
    Route::get('/service/{id}/edit', [ServiceController::class, 'edit'])->name('edit.service');
    Route::patch('/service/{id}/update', [ServiceController::class, 'update'])->name('update.service');
    Route::post('/service/{id}/delete', [ServiceController::class, 'delete'])->name('delete.service');
    Route::get('/service/details', [ServiceDetailsController::class, 'index'])->name('details.service');
    Route::post('/service/details', [ServiceDetailsController::class, 'add'])->name('add.details.service');
    Route::get('/service/details/manage', [ServiceDetailsController::class, 'manage'])->name('manage.details.service');
    Route::get('/service/details/{id}/edit', [ServiceDetailsController::class, 'edit'])->name('edit.details.service');
    Route::Patch('/service/details/{id}/update', [ServiceDetailsController::class, 'update'])->name('update.details.service');
    Route::get('/service/details/{id}/show', [ServiceDetailsController::class, 'show'])->name('show.details.service');
    Route::post('/service/details/{id}/delete', [ServiceDetailsController::class, 'delete'])->name('delete.details.service');

    // for portfolio 
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::post('/portfolio', [PortfolioController::class, 'add'])->name('add.portfolio');
    Route::get('/portfolio/manage', [PortfolioController::class, 'manage'])->name('manage.portfolio');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('edit.portfolio');
    Route::patch('/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('update.portfolio');
    Route::get('/portfolio/{id}/show', [PortfolioController::class, 'show'])->name('show.portfolio');
    Route::post('/portfolio/{id}/delete', [PortfolioController::class, 'delete'])->name('delete.portfolio');

    // for testimonial 
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::post('/testimonial', [TestimonialController::class, 'add'])->name('add.testimonial');
    Route::get('/testimonial/manage', [TestimonialController::class, 'manage'])->name('manage.testimonial');
    Route::get('/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('edit.testimonial');
    Route::patch('/testimonial/{id}/update', [TestimonialController::class, 'update'])->name('update.testimonial');
    Route::get('/testimonial/{id}/show', [TestimonialController::class, 'show'])->name('show.testimonial');
    Route::post('/testimonial/{id}/delete', [TestimonialController::class, 'delete'])->name('delete.testimonial');

    // for contact 
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'add'])->name('add.contact');
    Route::get('/contact/manage', [ContactController::class, 'manage'])->name('manage.contact');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('edit.contact');
    Route::patch('/contact/{id}/update', [ContactController::class, 'update'])->name('update.contact');
    Route::get('/contact/{id}/show', [ContactController::class, 'show'])->name('show.contact');
    Route::post('/contact/{id}/delete', [ContactController::class, 'delete'])->name('delete.contact');
   
});

require __DIR__ . '/auth.php';
