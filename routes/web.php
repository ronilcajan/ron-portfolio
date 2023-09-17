<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;

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
Route::get('/home/work', [HomeController::class, 'work'])->name('home.work');
Route::get('/home/services', [HomeController::class, 'services'])->name('home.services');
Route::get('/home/educations', [HomeController::class, 'education'])->name('home.education');
Route::get('/home/projects', [HomeController::class, 'projects'])->name('home.projects');
Route::get('/home/contacts', [HomeController::class, 'contacts'])->name('home.contacts');
Route::post('/message/store', [HomeController::class, 'store'])->name('message.store');
Route::get('/project/{project}/view', [HomeController::class, 'show'])->name('project.view');


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/messages', [MessagesController::class, 'index'])->name('messages');

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}/update', [ProjectController::class, 'update'])->name('projects.update');

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
    Route::get('/services/{services}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('/services/{services}/update', [ServicesController::class, 'update'])->name('services.update');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

require __DIR__.'/auth.php';