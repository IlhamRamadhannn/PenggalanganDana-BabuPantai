<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "123";
    return view('welcome');
});
Route::get('/about', function(){
    return view('about_us');
});
