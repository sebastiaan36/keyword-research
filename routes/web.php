<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\KeywordsController;
use App\Http\Controllers\GetDataController;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //add route for the project model
    Route::resource('project', ProjectController::class);
    Route::resource('project.keyword', KeywordsController::class);

    Route::get('/data', [GetDataController::class, 'GetData'])->name('data');
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');



});
require __DIR__.'/auth.php';
