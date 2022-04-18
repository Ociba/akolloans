<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminDashboardController extends Controller
{
    protected function getDashboard(){
        if(auth()->user()->category_id == 1){
            $staff     =$this->countStaff();
            $investors     =$this->countInvestors();
            $clients     =$this->countClients();
            $investors_deposits =$this->totalInvestorsAmountDeposited();
            $amount_loaned      =$this->totalClientsAmountLoaned();
            $amount_paid        =$this->totalClientsAmountPaid();
            $amount_not_paid    =$this->totalClientsAmountNotPaid();
            $company_interest   =$this->totalCompanyInterest();
            return view('admin.admin_dashboard',compact('staff','investors','clients','investors_deposits','amount_loaned','amount_paid','amount_not_paid','company_interest'));
        }elseif(auth()->user()->category_id == 2){
            return redirect("/investor");
        }else{
            return redirect('/my-dashboard');
        }
    }
    //count staff
    private function countStaff(){
        return DB::table('users')->where('category_id',1)->count();
    }
      //count investors
      private function countInvestors(){
        return DB::table('users')->where('category_id',2)->count();
    }
     //count clients   
     private function countClients(){
        return DB::table('users')->where('category_id',3)->count();
    }
      //get amount of money deposited by investors
      private function totalInvestorsAmountDeposited(){
        return DB::table('investors')->where('investors.investor_status','active')->sum('amount_deposited');
    }
      //get amount of money borrowed by clients
      private function totalClientsAmountLoaned(){
        return DB::table('clients')->sum('loan_amount');
    }
      //get amount of money paid by clients
      private function totalClientsAmountPaid(){
        return DB::table('clients')->where('clients.loan_status','paid')->sum('loan_amount');
    }
      //get amount of money not paid by clients
      private function totalClientsAmountNotPaid(){
        return DB::table('clients')->where('clients.loan_status','active')->sum('loan_amount');
    }
     //get company interest amount
     private function totalCompanyInterest(){
        return DB::table('interests')->sum('company_interest');
    }
}
