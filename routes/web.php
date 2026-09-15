<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\AuthController;




// HOME

Route::get('/', [HomeController::class, 'index'])
    ->name('home');



// PAKET USER





Route::get('/booking', function () {
    return view('booking');
});





// ================= ADMIN =================

Route::middleware('admin')->prefix('admin')->group(function(){


    // Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');





    Route::resource('paket', PaketController::class);



    // Booking
    Route::resource('booking', BookingController::class);


});






// ================= AUTH =================



Route::get('/register',
[AuthController::class,'register'])
->name('register');



Route::post('/register',
[AuthController::class,'storeRegister']);





Route::get('/login',
[AuthController::class,'login'])
->name('login');



Route::post('/login',
[AuthController::class,'authenticate']);





Route::post('/logout',
[AuthController::class,'logout'])
->name('logout');