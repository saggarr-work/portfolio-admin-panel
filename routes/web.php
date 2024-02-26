<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ExperienceDteailsController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/header/show', [HeaderController::class, 'show'])->name('show.header');

    // for about 
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/about/show', [AboutController::class, 'show'])->name('show.about');

    // for experience 
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::get('/experience/show', [ExperienceController::class, 'show'])->name('show.experience');

    // for experience details 
    Route::get('/experience/details', [ExperienceDteailsController::class, 'index'])->name('details.experience');
});

require __DIR__ . '/auth.php';
