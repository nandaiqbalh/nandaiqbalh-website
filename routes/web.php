<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about-us');

Route::get('/portfolio', [IndexController::class, 'portfolio'])->name('portfolio');

Route::get('/blog/home', [IndexController::class, 'blogHome'])->name('blog-home');

Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
