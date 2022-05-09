<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientsDashboardController;
use App\Http\Controllers\SendSMSController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
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

Route::get('/register', function () {
    return redirect('/');
});
Route::get('/',[FrontController::Class,'frontPage']);
Route::get('/login-now',[FrontController::Class,'Login']);
Route::get('/register-now',[FrontController::Class,'validateregisterClient']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[AdminDashboardController::Class,'getDashboard'])->name('Dashboard'); 
    
    Route::get('/investor',[AuthenticationController::Class, 'investorDashboard'])->name('MY Dashboard');
    Route::get('/my-dashboard',[ClientsDashboardController::Class, 'clientDashboard'])->name('My Dashboards'); 
    Route::get('/change-password',[ChangePasswordController::Class, 'changePassword'])->name('Change Password');
    Route::get('/update-password',[ChangePasswordController::Class, 'updateUserPassword']);
});
Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
Route::get('/send-sms', [SendSMSController::class, 'index']);
Route::get('/about',[AboutController::Class,'getAbout']);
Route::get('/services',[ServicesController::Class,'getServices']);
Route::get('/news',[NewsController::Class,'getNews']);
Route::get('/contact',[ContactController::Class,'getContact']);


