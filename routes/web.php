<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "123";
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});
