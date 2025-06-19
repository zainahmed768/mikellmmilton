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
});

Route::get('/about', function () {
    return view('front.about.aboutbook');
})->name('about');

Route::get('/blogs', function () {
    return view('front.blogs.blogs');
})->name('blogs');

Route::get('/blog-detail', function () {
    return view('front.blogs.blog-detail');
})->name('blog-detail');

Route::get('/contact', function () {
    return view('front.contact.contact');
})->name('contact');

Route::get('/shop', function () {
    return view('front.shop.shop');
})->name('shop');

Route::get('/cart', function () {
    return view('front.shop.cart');
})->name('cart');

Route::get('/privacy', function () {
    return view('front.web-views.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('front.web-views.terms');
})->name('terms');

Route::get('/refundpolicy', function () {
    return view('front.web-views.refundpolicy');
})->name('refundpolicy');