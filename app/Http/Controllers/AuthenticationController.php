<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthenticationController extends Controller
{
    protected function logoutUser(){
        Auth::logout();
        return redirect('/');
    }
     /**
     * This function gets Investors dashboard
     */
    protected function investorDashboard(){
        return view('admin.investors_dashboard');
    }
     /**
     * This function gets Borrowers dashboard
     */
    protected function borrowerDashboard(){
        return view('admin.borrowers_dashboard');
    }
   
}
