<?php

namespace Modules\Clients\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Package;
use App\Models\Client;
use App\Models\LoanDebt;
use App\Models\Interest;
use DB;
use Carbon\Carbon;

class ClientsController extends Controller
{
    /**
     * This function gets form for paying loan.
     */
    public function payLoanForm($client_id){
        $get_package_details =Package::where('id',$client_id)->get(['client_interests','id','investor_interest']);
        $pay_loan =Client::where('id',$client_id)->get();
        return view('clients::pay_loan_form',compact('pay_loan','get_package_details'));
    }

    /**
     *This function saves loan payments
     */
    public function payLoan($client_id)
    {
        if(request()->loan_payments_amount < $this->loanAmountTobePaid($client_id)){
            return redirect()->back()->withErrors('Pay the actual amount for your loan');
        }else{
        //get the package id this client borrowed loan from
        $package_id =Client::where('id',$client_id)->value('package_id');
        //this function gets the actual amount borrowed
        $actual_amount_borrowed =Client::where('id',$client_id)->value('loan_amount');
        //get the investors  interests
        $investors_interes =Package::where('id',$package_id)->value('investor_interest');
        //get the clients interests
        $client_interes =Package::where('id',$package_id)->value('client_interests');

        //this function gets actual interest to be shared both investor and company
        $interest_to_be_shared =request()->loan_payments_amount -$actual_amount_borrowed;
        //get amount for the investor
        $investor_interest_amount =$interest_to_be_shared *($investors_interes/100);
        //get interest amount for company
        //$company_interest_amount =$interest_to_be_shared *($company_interes/100);
        $company_interest_amount =($interest_to_be_shared -$investor_interest_amount) + $this->overDueAmount($client_id);
        //save the loan payment amount 
        LoanDebt::where('borrowed_by',auth()->user()->id)->update(array(
            'loan_payments_amount' =>request()->loan_payments_amount,
        ));
        //update client loan status
        Client::where('user_id',auth()->user()->id)->update(array('loan_status' =>'paid'));

        //this function saves the interests for company and investor
        $interest_obj =new Interest;
        $interest_obj ->user_id              =auth()->user()->id;
        $interest_obj ->package_id           = $package_id;
        $interest_obj->paid_amount           =request()->loan_payments_amount;
        $interest_obj->interest_for_investor =$investor_interest_amount;
        $interest_obj->company_interest      =$company_interest_amount;
        $interest_obj->overdue_interest      =$this->overDueAmount($client_id);
        $interest_obj->save();
        return redirect('/clients/my-loan-details')->with('msg','Operation successful');
    }
    }
     /**
      * This function calculates the total loan amount to be paid
      */
      private function loanAmountTobePaid($client_id){
        $surcharge =1000;
        $overduedate=DB::table('clients')->where('id',$client_id)->value('overdue_date');
        $surcharge_with_overdue_days = \Carbon\Carbon::parse($overduedate)->diffInDays() *$surcharge;
        
      $client_interest =DB::table('clients')->join('packages','packages.id','clients.package_id')->where('clients.id',$client_id)->value('packages.client_interests');
      $loan_amount=DB::table('clients')->where('id',$client_id)->value('loan_amount');
      $actual_intest_amount=($client_interest/100)*$loan_amount;
      $dabt =$actual_intest_amount + $loan_amount + $surcharge_with_overdue_days;
      return $dabt;
    }
   /**
    * get overdue amount
    */
    private function overDueAmount($client_id){
        $surcharge =1000;
        $overduedate=DB::table('clients')->where('id',$client_id)->value('overdue_date');
        $surcharge_with_overdue_days = \Carbon\Carbon::parse($overduedate)->diffInDays() *$surcharge;
        return $surcharge_with_overdue_days;
    }
}
