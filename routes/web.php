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
    return view('kids/index-2');
});
Route::get('/single', function () {
    return view('kids/single');
});
Route::get('/product', function () {
    return view('kids/product');
});
Route::get('/product-details', function () {
    return view('kids/product-details');
});
Route::get('/shop-cart', function () {
    return view('kids/shop-cart');
});
Route::get('/blog', function () {
    return view('kids/blog');
});
Route::get('/gallery', function () {
    return view('kids/gallery');
});
Route::get('/gallery-2', function () {
    return view('kids/gallery-2');
});
Route::get('/event', function () {
    return view('kids/event');
});
Route::get('/event-single', function () {
    return view('kids/event-single');
});
Route::get('/404', function () {
    return view('kids/404');
});
Route::get('/teachers', function () {
    return view('kids/teachers');
});
Route::get('/teacher-details', function () {
    return view('kids/teacher-details');
});
Route::get('/classes', function () {
    return view('kids/classes');
});
Route::get('/class-single', function () {
    return view('kids/class-single');
});
Route::get('/about', function () {
    return view('kids/about');
});
Route::get('/about-2', function () {
    return view('kids/about-2');
});
Route::get('/index-3', function () {
    return view('kids/index-3');
});
Route::get('/index-4', function () {
    return view('kids/index-4');
});
Route::get('/one-page', function () {
    return view('kids/one-page');
});
Route::get('/boxed-layout', function () {
    return view('kids/boxed-layout');
});
Route::get('/contact', function () {
    return view('kids/contact');
});

Auth::routes();
Route::get('/auth', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
