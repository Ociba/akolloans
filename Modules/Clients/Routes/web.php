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

Route::prefix('clients')->group(function() { 
    Route::get('/', 'ClientsController@index');
    Route::get('/request-loan', 'LoansController@requestLoan')->name('Request Loan');
    Route::get('/my-loan-details', 'LoansController@myLoanDetails')->name('My Loan Details');
    Route::get('/my-profile', 'ProfileController@myProfile')->name('My Profile');
    Route::get('/edit-profile', 'ProfileController@editProfile')->name('Edit Profile');
});
