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
    Route::get('/suspend-investor/{investor_id}', 'InvestorsController@suspendInvestor');
    Route::get('/activate-investor/{investor_id}', 'InvestorsController@activateInvestor');
    Route::get('/delete-investor/{investor_id}', 'InvestorsController@deleteInvestor');
    Route::get('/clients-with-loans', 'ClientsController@getClientsWithLoans')->name('Clients With Loans');
    Route::get('/loan-defaulters', 'ClientsController@getClientsLoanDefaulters')->name('Loan Defaulters');
    Route::get('/get-packages', 'PackagesController@getPackages')->name('Packages'); 
    Route::get('/create-investor', 'InvestorsController@validatecreateInvestor'); 
    Route::get('/create-package', 'PackagesController@createPackage');
    Route::get('/get-interests', 'ClientsController@getInterestsList')->name('interests'); 
    Route::get('/add-staff', 'AdminController@validateCreateStaff');  
    Route::get('/assign-or-remove-permissions/{staff_id}', 'AdminController@getStaffPermissions') ->name('Staff Permissions');
    Route::get('/add-permission/{staff_id}', 'AdminController@getPermissions') ->name('Permissions');  
    Route::get('/assign-permissions/{staff_id}', 'AdminController@assignPermissions');
    Route::get('/unassign-permissions/{staff_id}', 'AdminController@unsignPermission'); 
    Route::get('/edit-package/{package_id}', 'PackagesController@editPackage')->name('Edit Package'); 
    Route::get('/update-package/{package_id}', 'PackagesController@updatePackage'); 
    Route::get('/delete-package/{package_id}', 'PackagesController@deletePackage'); 
    Route::get('/edit/{client_id}', 'ClientsController@editClientInfo')->name('Edit Client Information');
    Route::get('/update-client-info/{client_id}', 'ClientsController@updateClientInfo');
    Route::get('/delete-client-info/{client_id}', 'ClientsController@deleteClient');
});
