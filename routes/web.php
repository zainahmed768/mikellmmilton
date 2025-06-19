<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.home.home');
})->name('home');

Route::get('/about-author', function () {
    return view('front.about.aboutAuthor');
})->name('about-author');


Route::get('/about', function () {
    return view('front.about.aboutbook');
})->name('about');

Route::get('/blogs', function () {
    return view('front.blogs.blogs');
})->name('blogs');

Route::get('/contact', function () {
    return view('front.contact.contact');
})->name('contact');