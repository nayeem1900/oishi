<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\UserCoontroller;



//Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/regestration', [HomeController::class,'regestration'])->name('regestration');


    //sliders
    Route::get('/view', [UserCoontroller::class, 'view']);
