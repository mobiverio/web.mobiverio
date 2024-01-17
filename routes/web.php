<?php

use App\Http\Controllers\view\pageController;
use Illuminate\Support\Facades\Route;

Route::controller(pageController::class)->group(function () {   

    Route::get('/', 'indexPage')->name('/');
    Route::get('/company', 'aboutPage')->name('/company');
    Route::get('/service', 'servicePage')->name('/service');
    Route::get('/contacts', 'contactPage')->name('/contact');
    
    
});      
