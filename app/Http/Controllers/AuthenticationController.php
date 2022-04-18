<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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
        $packge_name           =$this->getPackageName();
       $amount_depositedd      =$this->getAmountDeposited();
       $money_loaned           =$this->getSumPackageAmount();
       $total_interest         =$this->getInterestTotalAmount();
       $monthly_money_loaned   =$this->getMonthlMoneyLoaned();
       $total_monthly_interests=$this->getMonthlyInterestSum();
        return view('admin.investors_dashboard', compact('packge_name','amount_depositedd','money_loaned','total_interest',
        'monthly_money_loaned','total_monthly_interests'));
    }
     /**
     * This function gets Borrowers dashboard
     */
    protected function borrowerDashboard(){
        return view('admin.borrowers_dashboard');
    }
    //This fuction gets package name
    private function getPackageName(){
        return DB::table('investors')->join('packages','packages.id','investors.package_id')->where('investors.bought_by',auth()->user()->id)->get('package_name');
    }
    //This function gets amount deposited
   private function getAmountDeposited(){
    return DB::table('investors')->where('bought_by',auth()->user()->id)->value('amount_deposited');
   }
    //This function gets amount borrowed based on the package id
    private function getSumPackageAmount(){
        return DB::table('clients')->join('investors','investors.package_id','clients.package_id')
        ->where('clients.loan_status','paid')
        ->where('investors.bought_by',auth()->user()->id)->sum('clients.loan_amount');
       }
       //This function gets interest sum for authenticated user
    private function getInterestTotalAmount(){
    return DB::table('interests')->join('investors','investors.package_id','interests.package_id')
    ->where('investors.bought_by',auth()->user()->id)->sum('interests.interest_for_investor');
    }
       /**
     * Ths function gets money borrowed on th authenticated user package  
     */
    private function getMonthlMoneyLoaned():string{
        $debts = [];
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $month_digs = range(0,12);
        for($i=0;$i<count($months); $i++){
            array_push($debts,DB::table('clients')->join('investors','investors.package_id','clients.package_id')
            ->where('clients.loan_status','paid')->whereMonth('clients.created_at', $i+1)
            ->where('investors.bought_by',auth()->user()->id)->sum('clients.loan_amount'));
        }
        return json_encode($debts);  
    }
        /**
     * Ths function gets monthly total intrests for the authenticated user package  
     */
    private function getMonthlyInterestSum():string{
        $interest = [];
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $month_digs = range(0,12);
        for($i=0;$i<count($months); $i++){
            array_push($interest,DB::table('interests')->join('investors','investors.package_id','interests.package_id')
            ->whereMonth('interests.created_at', $i+1)
            ->where('investors.bought_by',auth()->user()->id)->sum('interests.interest_for_investor'));
        }
        return json_encode($interest);  
    }
}
