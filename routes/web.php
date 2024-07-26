<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',function(){
    return "01738464713";
});


Route::get('/about',function(){
    return view ('about');
});
