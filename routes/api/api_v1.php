<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\AnexosController;
use App\Http\Controllers\Api\CentrosController;

Route::post('/login',[UserController::class,'show'])->name('user.v1.show');
Route::post('/register',[UserController::class,'store'])->name('user.v1.store');
Route::resource('/roles',RolesController::class);
Route::resource('/anexos',AnexosController::class);
Route::resource('/centros',CentrosController::class);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout',[UserController::class,'destroy'])->name('user.v1.destroy');
});