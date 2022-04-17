<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChangePasswordController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AuthenticationController::Class,'getDashboard'])->name('Dashboard'); 
    
    Route::get('/investor',[AuthenticationController::Class, 'investorDashboard'])->name('Dashboard');
    Route::get('/my-dashboard',[AuthenticationController::Class, 'borrowerDashboard'])->name('Dashboard'); 
    Route::get('/change-password',[ChangePasswordController::Class, 'changePassword'])->name('Change Password');
    Route::get('/update-password',[ChangePasswordController::Class, 'updateUserPassword']);
});
Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);


