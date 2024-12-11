<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     echo "123";
//     return view('welcome');
// });
Route::get('/', function(){
    return view('home');
});
Route::get('/profile', function(){
    return view('profile');
});
Route::get('/profile_update', function(){
    return view('profile_update');
});
