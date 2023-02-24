<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;

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

/** acceuil de app */
Route::get('/', function () {
    return view('home');
})->name('acceuil');


Route::get('/single', function () {
    return view('kids/single');
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
    return view('event/event');
});
Route::get('/event-single', function () {
    return view('event/event-single');
});
Route::get('/404', function () {
    return view('kids/404');
})->name('404');


Route::get('/about', function () {
    return view('kids/about');
});
Route::get('/about-2', function () {
    return view('kids/about-2');
});


Route::get('/one-page', function () {
    return view('kids/one-page');
});
Route::get('/boxed-layout', function () {
    return view('kids/boxed-layout');
});
Route::get('/contact', function () {
    return view('kids/contact') ;
});

Route::get('/signUp', function(){
    return view('kids.signUp');
})->name('inscriptionform');

Route::get('/create', [CandidatController::class, 'create'])->name('create');
Route::post('/store', [CandidatController::class, 'store'])->name('store');
