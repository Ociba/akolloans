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

Route::prefix('accountsettings')->group(function() { 
    Route::get('/', 'AccountSettingsController@index');
    Route::get('/get-roles-for-permissions', 'PermissionsController@getRolesForPermissions')->name('Roles For Permissions');
    Route::get('/get-roles', 'RolesController@getRoles')->name('Roles');
    Route::get('/get-all-users', 'UsersController@getUsers')->name('Users');
    Route::get('/get-all-users', 'UsersController@getUsers')->name('Users');
    Route::get('/get-categories', 'CategoryController@getCategory')->name('Category');
    Route::get('/get-districts', 'DistrictController@getDistrict')->name('Districts');
    
});
