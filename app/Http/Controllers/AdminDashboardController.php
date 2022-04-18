<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminDashboardController extends Controller
{
    protected function getDashboard(){
        if(auth()->user()->category_id == 1){
            $staff                    =$this->countStaff();
            $investors                =$this->countInvestors();
            $clients                  =$this->countClients();
            $investors_deposits       =$this->totalInvestorsAmountDeposited();
            $amount_loaned            =$this->totalClientsAmountLoaned();
            $amount_paid              =$this->totalClientsAmountPaid();
            $amount_not_paid          =$this->totalClientsAmountNotPaid();
            $company_interest         =$this->totalCompanyInterest();
            $loan_monthly_debts       =$this->getMonthlyDebts();
            $loan_monthly_amount_paid =$this->getMonthlyAmountPaid();
            return view('admin.admin_dashboard',compact('staff','investors','clients','investors_deposits','amount_loaned','amount_paid','amount_not_paid',
              'company_interest','loan_monthly_debts','loan_monthly_amount_paid'));
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
      /**
     * Ths function gets Loan Debts  
     */
    private function getMonthlyDebts():string{
        $debts = [];
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $month_digs = range(0,12);
        for($i=0;$i<count($months); $i++){
            array_push($debts,DB::table('loan_debts')->whereMonth('created_at', $i+1)->where('loan_payments_amount',null)->sum('debt'));
        }
        return json_encode($debts);  
    }
     /**
     * Ths function gets Monthly Amount Paid
     */
    private function getMonthlyAmountPaid():string{
        $paid_amount = [];
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $month_digs = range(0,12);
        for($i=0;$i<count($months); $i++){
            array_push($paid_amount,DB::table('loan_debts')->whereMonth('created_at', $i+1)->whereNotNull('loan_payments_amount')->sum('loan_payments_amount'));
        }
        return json_encode($paid_amount);  
    }
}
