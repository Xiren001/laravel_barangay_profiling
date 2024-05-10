<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('barangay');
});

Route::get('/terms', function () {
    return view('PTD/terms');
});

Route::get('/disclaimer', function () {
    return view('PTD/disclaimer');
});

Route::get('/privacy', function () {
    return view('PTD/privacy');
});

Route::get('/faq', function () {
    return view('PTD/faq');
});



Route::get('/bussiness', function () {
    return view('cert/bussiness');
});

Route::get('/clearance', function () {
    return view('cert/clearance');
});

Route::get('/ID', function () {
    return view('cert/ID');
});

Route::get('/residence', function () {
    return view('cert/residence');
});

Route::get('/indegency', function () {
    return view('cert/indegency');
});


Route::get('/dashboard', [ResidentsController::class, 'index'])->name('residents.index');
Route::get('/dashboard/create', [ResidentsController::class, 'create'])->name('residents.create');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
