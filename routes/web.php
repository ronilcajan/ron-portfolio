<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Experience;
use Illuminate\Support\Facades\Route;
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

Route::group([
    'middleware' => 'guest'
],function () {
    Route::get('/', [HomeController::class, 'index']);
});

// Route::group(function(){

// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin/')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('experience', Experience::class)->name('experience');
    Route::get('experience/create', Experience::class)->name('experience.create');
})->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';