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
    Route::get('/pay-loan-form/{client_id}', 'ClientsController@payLoanForm')->name('Pay Loan Form');
    Route::get('/request-for-loan/{package_id}', 'LoansController@requestLoan')->name('Request Loan');
    Route::get('/my-loan-details', 'LoansController@myLoanDetails')->name('My Loan Details');
    Route::get('/my-profile', 'ProfileController@myProfile')->name('My Profile'); 
    Route::get('/edit-profile', 'ProfileController@editProfile')->name('Edit Profile'); 
    Route::post('/send-loan-request', 'LoansController@validateLoanRequest'); 
    Route::get('/request-loan', 'LoansController@clientsPackageInfo')->name('Amount Range'); 
    Route::get('/new-loan/{package_id}', 'LoansController@newLoanForm')->name('Request New Loan');
    Route::get('/request-new-loan', 'LoansController@requestNewLoan');
    Route::get('/update-password',[ProfileController::Class, 'updateUserPassword']); 
    Route::get('/pay-loan/{client_id}', 'ClientsController@payLoan');
});
