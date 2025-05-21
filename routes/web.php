<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;

Route::get('/', function () {
    return view('dashboard');
});

Route::view('/home','welcome');
Route::view('color','bc_color');
Route::view('typography','bc_typography');
Route::view('icon','icon-feather');
Route::view('login','login');
Route::view('register','register');
Route::post('userRegister',[Register::class,'Register']);