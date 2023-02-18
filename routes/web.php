<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'frontend.'],function(){
    Route::get('/',             [FrontendController::class , 'index']);
    Route::post('/subscribe',   [FrontendController::class , 'subscribe'])->name('subscribe');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
