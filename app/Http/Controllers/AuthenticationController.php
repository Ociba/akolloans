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
    protected function getDashboard(){
        if(auth()->user()->category == 'admin'){
            return view('admin.admin_dashboard');
        }elseif(auth()->user()->category == 'investor'){
            return redirect("/investor");
        }else{
            return redirect('/my-dashboard');
        }
    }
}
