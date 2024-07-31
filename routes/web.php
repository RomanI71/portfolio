<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;


Route::get('/',[WebsiteController::class,'GetMyWebsiteData'])->name('mywebsite');
Route::get('/mydashboard',[DashboardController::class,'mydashboard'])->name('mydashboard');


Route::get('/contact',function(){
    return "01738464713";
});


Route::get('/about',function(){
    return view ('about');
});
