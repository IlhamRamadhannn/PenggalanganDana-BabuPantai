<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers;

// Route::get('/', function () {
//     echo "123";
//     return view('welcome');
// });
Route::get('/', [Controllers\HomeController::class, 'index']);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/articles', [Controllers\ArticleController::class, 'index']);
Route::get('/donate', [Controllers\DonateController::class, 'index']);
Route::get('/profile', [Controllers\ProfileController::class, 'index']);
Route::get('/profile_update', function(){
    return view('profile_update');
});

Route::get('/transaction', [Controllers\TransactionController::class, 'index']);
