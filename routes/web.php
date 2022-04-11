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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/bestseller-empty', function () {
    return view('bestseller-empty');
});

Route::get('/bestseller', function () {
    return view('bestseller');
});

Route::get('/cart-empty', function () {
    return view('cart-empty');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/checkourt', function () {
    return view('checkout');
});

Route::get('/editPassowrd', function () {
    return view('editPassword');
});

Route::get('/forget', function () {
    return view('forget');
});

Route::get('/favList', function () {
    return view('favList');
});


Route::get('/forget2', function () {
    return view('forget2');
});

Route::get('/giftsRewards', function () {
    return view('giftsRewards');
});

Route::get('/how-to-buy', function () {
    return view('how-to-buy');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/orderHistory', function () {
    return view('orderHistory');
});

Route::get('/productDetails', function () {
    return view('productDetails');
});

Route::get('/receipt', function () {
    return view('receipt');
});
Route::get('/registeration', function () {
    return view('registeration');
});

Route::get('/rest', function () {
    return view('reset');
});

Route::get('/searchResults-empty', function () {
    return view('searchResults-empty');
});

Route::get('/subCategory', function () {
    return view('subCategory');
});

Route::get('/searchResults', function () {
    return view('searchResults');
});

Route::get('/tesrms', function () {
    return view('terms');
});



/*