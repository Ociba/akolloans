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

Route::prefix('admin')->group(function() {   
    Route::get('/', 'AdminController@index');
    Route::get('/investors', 'InvestorsController@getInvestors')->name('Investors');
    Route::get('/suspended-investors', 'InvestorsController@getSuspendedInvestors')->name('Suspended Investors');
    Route::get('/all-clients', 'ClientsController@getClients')->name('All Clients');
    Route::get('/clients-with-loans', 'ClientsController@getClientsWithLoans')->name('Clients With Loans');
    Route::get('/loan-defaulters', 'ClientsController@getClientsLoanDefaulters')->name('Loan Defaulters');
    Route::get('/get-packages', 'PackagesController@getPackages')->name('Packages'); 
    Route::get('/create-investor', 'InvestorsController@validatecreateInvestor'); 
    Route::get('/create-package', 'PackagesController@createPackage');
    Route::get('/get-interests', 'ClientsController@getInterestsList')->name('interests');
});
