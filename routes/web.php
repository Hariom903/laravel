<?php

use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\UserController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::controller(UserController::class)->group(
    function(){
     Route::get("logingoogle",'logingoogle')->name('login.google');
     Route::get('/google/callback','logincallbackgoogle');
    }
);
Route::get('/',[UserController::class,'user'])->middleware(['auth'])->name('dashboard');
Route::middleware('guest')->group(function () {
   Route::post('userRegister',[UserController::class,'Register']);
Route::post('login',[UserController::class,'userlogin']);
Route::view('login','login')->name('login');
Route::view('register','register');
});

Route::get('/dashboard',[UserController::class,'user'])->middleware(['auth'])->name('dashboard');

Route::view('invoice','invoice');

Route::middleware(['auth'])->group(function () {
Route::view('color','bc_color');
Route::view('typography','bc_typography');
Route::view('icon','icon-feather');


Route::post('logout',[UserController::class,'userlogout']);
Route::get("/change-password",[UserController::class,'showchangePassword']);
Route::post("/change-password",[UserController::class,'changePassword']);


});

Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});


use App\Http\Controllers\FacebookController;

Route::get('/facebook-post-form', function () {
    return view('facebookpost');
})->name('facebook.form');

Route::post('/facebook-post', [FacebookController::class, 'postMessage'])->name('facebook.post');
