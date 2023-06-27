<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Sultan\Contact\Http\Controller\ContactController;

Route::group(['namespace' => 'Sultan\Contact\Http\Controller'], function(){
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'store'])->name('contact');
});


// we can either use the namespace in route group or use directly