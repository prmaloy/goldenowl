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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/product2', function () {
    return view('product2');
});

Route::get('/product3', function () {
    return view('product3');
});

Route::get('/product4', function () {
    return view('product4');
});

Route::get('/product5', function () {
    return view('product5');
});

Route::get('/product6', function () {
    return view('product6');
});

Route::get('/product7', function () {
    return view('product7');
});

Route::get('/product8', function () {
    return view('product8');
});

Route::get('/product9', function () {
    return view('product9');
});

Route::get('/product9', function () {
    return view('product9');
});

Route::get('/product10', function () {
    return view('product10');
});

Route::get('/product11', function () {
    return view('product11');
});

Route::get('/product12', function () {
    return view('product12');
});



Route::get('/learn', function () {
    return view('learn');
});

Route::get('/learn2', function () {
    return view('learn2');
});


Route::get('/learn3', function () {
    return view('learn3');
});

Route::get('/learn4', function () {
    return view('learn4');
});