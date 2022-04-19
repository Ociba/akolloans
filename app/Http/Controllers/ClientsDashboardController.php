<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClientsDashboardController extends Controller
{
     /**
     * This function gets Borrowers/clients dashboard
     */
    protected function clientDashboard(){
        $get_loan_status         =$this->loanStatus();
        $get_client_interests    =$this->getInterestAmount();
        $actual_loan_amount      =$this->actualLoanAmount();
        return view('admin.borrowers_dashboard',compact('get_loan_status','get_client_interests','actual_loan_amount'));
    }
    //This function checks for the loan status 
    private function loanStatus(){
        return DB::table('clients')->where('user_id',auth()->user()->id)->latest()->limit(1)->get(['loan_status','loan_amount']);        
    }
    //This function gets the interest amount 
    private function getInterestAmount(){
        $client_interest= DB::table('clients')->join('packages','packages.id','clients.package_id')
       ->where('clients.user_id',auth()->user()->id)->latest('clients.created_at')->value('packages.client_interests');

        $loan_amount=DB::table('clients')->where('user_id',auth()->user()->id)->latest()->value('loan_amount');
        $actual_intest_amount=($client_interest/100)*$loan_amount;
        return $actual_intest_amount;
    }
      //This function checks for the loan status 
      private function actualLoanAmount(){
        return DB::table('clients')->where('user_id',auth()->user()->id)->latest()->value('loan_amount');        
    }
}
