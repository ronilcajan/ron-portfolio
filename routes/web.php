<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ServicesController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/experience/{exp}/edit', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::put('/experience/{exp}/update', [ExperienceController::class, 'update'])->name('experience.update');

    Route::get('/education', [EducationController::class, 'index'])->name('education');
    Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');
    Route::get('/education/{education}/edit', [EducationController::class, 'edit'])->name('education.edit');
    Route::put('/education/{education}/update', [EducationController::class, 'update'])->name('education.update');

    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('/services/store', [ServicesController::class, 'store'])->name('services.store');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';