<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

    Route::resource('product', 'Admin\ProductController');

    Route::get('product/history/{id}', "Admin\AdminShipmentHistoryController@history")->name('history');
    Route::post('update/product/history/', "Admin\AdminShipmentHistoryController@updateHistory")->name('updateHistory');

    Route::get('security', "Admin\AdminController@security")->name('security');
    Route::post('change-password', 'Admin\AdminController@store')->name('change.password');

});
