<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

Route::controller(VisitorController::class)->group(function(){
    Route::get('/','index')->name('visitor.home');
});