<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\BussinessController;
use App\Http\Controllers\ClearanceController;
use App\Http\Controllers\IndegencyController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\IdController;



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



Route::get('/admin', [UserController::class, 'index'])->name('user.index');
Route::group(['prefix' => 'admin/user'], function () {
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/add', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::post('/delete', [UserController::class, 'destroy'])->name('user.delete');
});


Route::resource('products', ProductController::class);
Route::resource('residents', ResidentController::class);
Route::resource('bussinesses', BussinessController::class);
Route::resource('clearances', ClearanceController::class);
Route::resource('indegencys', IndegencyController::class);
Route::resource('residences', ResidenceController::class);
Route::resource('ids', IdController::class);

Route::get('requested-business', [BussinessController::class, 'index2']);
Route::get('requested-clearance', [ClearanceController::class, 'index2']);
Route::get('requested-indigency', [IndegencyController::class, 'index2']);
Route::get('requested-residency', [ResidenceController::class, 'index2']);
Route::get('requested-id', [IdController::class, 'index2']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
