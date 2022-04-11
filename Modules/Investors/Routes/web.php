<?php

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

Route::prefix('investors')->group(function() {
    Route::get('/my-interest', 'InvestorsController@getMyInterest')->name('Interest');
    Route::get('/view-packages', 'PackagesController@getPackages')->name('Packages'); 
    Route::get('/change-password', 'ChangePasswordController@changePassword')->name('Change Password');
    Route::get('/profile', 'ProfileController@getMyProfile')->name('Profile');
});
