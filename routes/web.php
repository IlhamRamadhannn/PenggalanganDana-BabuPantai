<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     echo "123";
//     return view('welcome');
// });
Route::get('/', [Controllers\HomeController::class, 'index']);
Route::get('/homepage', [Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/about', [Controllers\AboutController::class, 'index'])->name('about');
Route::get('/articles', [Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('/donate', [Controllers\DonateController::class, 'index'])->name('donate');

Route::resource('profile', Controllers\ProfileController::class);
Route::get('/editpage', [Controllers\ProfileController::class, 'editpage'])->name('profile.editpage');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');



// Route::post('/transaksi', [Controllers\TransactionController::class, 'store'])->name('transaksi.store');

Route::resource('transaksi', Controllers\TransactionController::class);

// // Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
