<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/admin', [AuthController::class, 'admin'])
        ->middleware('role:admin');


    Route::get('/superadmin', [AuthController::class, 'superuser'])
        ->middleware('role:superadmin');
    Route::get("/user-list",[AuthController::class,'Alluser'])->middleware('role:superadmin');

    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/create-invoice',[InvoiceController::class,'create']);
});
