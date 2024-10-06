<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers;


Route::get('/', function () {
    return view('home', [
        'heading' => 'Welcome to Your App',
        // You can pass any data you need to the home view here
    ]);
});




Route::middleware(['guest'])->group(function () {
    Route::get('/sign-up', [Controllers\Auth\RegisterController::class, 'create'])->name('auth.register');
    Route::post('/sign-up', [Controllers\Auth\RegisterController::class, 'store']);

    Route::get('/sign-in', [Controllers\Auth\SessionController::class, 'create'])->name('auth.login');
    Route::post('/sign-in', [Controllers\Auth\SessionController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/sign-out', [Controllers\Auth\SessionController::class, 'destroy'])->name('auth.logout');

});
Route::middleware(['auth'])->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'show'])->name('appointments.show');
});

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/appointments', [AppointmentController::class, 'show'])->name('appointment.show');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('serv.show');
Route::post('/appointment/book/', [AppointmentController::class, 'store'])->name('appointment.book');
Route::post('/appointments/{id}', [AppointmentController::class, 'delete'])->name('appointment.delete');





 