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
        if(auth()->user()->category_id == 1){
            return view('admin.admin_dashboard');
        }elseif(auth()->user()->category_id == 2){
            return redirect("/investor");
        }else{
            return redirect('/my-dashboard');
        }
    }
}
