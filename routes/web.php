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

Route::view('/', 'pages.index')->name('index');
Route::view('/about', 'pages.about')->name('about');
Route::view('/products', 'pages.product')->name('product');
Route::view('/partner', 'pages.partner')->name('partner');
Route::view('/track/product', 'pages.track')->name('track');

Route::post('track/product', "TrackProductController@trackShipment")->name('trackShipment');


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

});

Auth::routes();
include 'admin.php';

Route::get('/home', 'HomeController@index')->name('home');
