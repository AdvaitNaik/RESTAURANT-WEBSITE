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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::name('admin.')->prefix('admin')->group(function(){
    Route::match(['get', 'post'], '/login', 'Auth\LoginController@adminLogin' )->name('login');
    Route::match(['get', 'post'], '/register', 'Auth\RegisterController@adminRegister' )->name('register');
    Route::get('/','AdminController@index')->middleware('auth:admin');
    Route::post('/','AdminController@store');
    Route::get('/showpaymode','AdminController@showpaymode')->middleware('auth:admin');
    Route::post('/paid/{id}', 'PaymentController@paid')->name('paid');
    Route::get('/vieworders','AdminController@view')->name('view')->middleware('auth:admin');
    Route::post('/order/{id}', 'AdminController@done')->name('done');
});

Route::name('ordering.')->middleware('auth')->prefix('ordering')->group(function(){ 

    Route::view('/navigate', 'ordering.menu')->name('navigate');
    Route::get('/showitems', 'OrderController@show')->name('show');
    Route::post('/placeorder', 'OrderController@order')->name('order');
    Route::post('/addItem/{id}', 'OrderController@add_item')->name('add');
    Route::get('/cart', 'OrderController@cart')->name('cart');
    Route::post('/cart/{id}', 'OrderController@remove')->name('remove');
    Route::post('/save', 'OrderController@continue')->name('save');
    Route::post('/change/{id}', 'OrderController@quantity')->name('change');
    Route::get('/history', 'OrderController@history')->name('history');
    
});

Route::name('payment.')->prefix('payment')->group(function(){ 
    Route::post('/pay/{id}', 'PaymentController@pay')->name('pay');
});