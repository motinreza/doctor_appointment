<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/doctor_page', [HomeController::class, 'doctor_page']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/canceled/{id}', [AdminController::class, 'canceled']);
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);
Route::get('/doctorupdate/{id}', [AdminController::class, 'doctorupdate']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);
Route::get('/emailview/{id}', [AdminController::class, 'emailview']);
Route::post('/sendmail/{id}', [AdminController::class, 'sendmail']);
