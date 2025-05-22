<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard'); // or any page you want
})->middleware(['auth'])->name('dashboard');
Route::post('userRegister',[UserController::class,'Register']);
Route::post('login',[UserController::class,'userlogin']);
Route::view('login','login')->name('login');
Route::view('register','register');

Route::middleware(['auth'])->group(function () {
Route::view('color','bc_color');
Route::view('typography','bc_typography');
Route::view('icon','icon-feather');


Route::post('logout',[UserController::class,'userlogout']);
Route::get("/change-password",[UserController::class,'showchangePassword']);
Route::post("/change-password",[UserController::class,'changePassword']);


});