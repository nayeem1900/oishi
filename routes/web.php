<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;



//Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/regestration', [HomeController::class,'regestration'])->name('regestration');