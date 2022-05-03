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
Route::group(['prefix'=>'accountsettings', 'middleware'=>['auth']],function(){ 
    Route::get('/', 'AccountSettingsController@index');
    Route::get('/get-roles-for-permissions', 'PermissionsController@getRolesForPermissions')->name('Roles For Permissions');
    Route::get('/get-roles', 'RolesController@getRoles')->name('Roles');
    Route::get('/get-all-users', 'UsersController@getUsers')->name('Users');
    Route::get('/get-all-users', 'UsersController@getUsers')->name('Users'); 
    Route::get('/get-categories', 'CategoryController@getCategory')->name('Category');
    Route::get('/create-category', 'CategoryController@createCategory'); 
    Route::get('/get-districts', 'DistrictController@getDistrict')->name('Districts');
    Route::get('/add-district', 'DistrictController@createDistrict');
    Route::get('/edit-category/{category_id}','CategoryController@editCategory')->name('Edit Category');
    Route::get('/update-category/{category_id}','CategoryController@updateCategory');
    Route::get('/delete-category/{category_id}','CategoryController@deleteCategory');
    Route::get('/edit-district/{district_id}', 'DistrictController@editDistrict')->name('Edit District');
    Route::get('/update-district/{district_id}', 'DistrictController@update');
    Route::get('/delete-district/{district_id}', 'DistrictController@deleteDistrict');
    Route::get('/edit-user/{user_id}','UsersController@editUser')->name('Edit User');
    Route::get('/update-user/{user_id}','UsersController@updateUser');
    Route::get('/delete-user/{user_id}','UsersController@deleteUser');
});
