<?php

namespace Modules\Clients\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\District;
use App\Models\Client;
use Auth;
use App\Models\User;
use App\Models\Package;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function requestLoan($package_id)
    {
        $get_client_district =District::select('id','district')->get();
        $request_loan_now =Package::where('id',$package_id)->get();
        return view('clients::request_loan',compact('get_client_district','request_loan_now'));
    }
    /**
     * This function gets loan details
     */
    public function myLoanDetails()
    {
        return view('clients::loan_details');
    }
    /**
     * This function gets packages for the clients
     */
    public function clientsPackageInfo()
    {
        return view('clients::clients_packages');
    }

    private function createLoanRequest()
    {
        // if(request()->amount_deposited < 'from' || request()->amount_deposited >'to' ){
        //     return redirect()->back()->withErrors('Amount is not in the Package Range');
        // }
        $client_photo = request()->profile_photo_path;
        $client_photo_original_name = $client_photo->getClientOriginalName();
        $client_photo->move('clients_photo/',$client_photo_original_name);

        $clients_loan_request =new Client; 
        $clients_loan_request->package_id        =request()->package_id;
        $clients_loan_request->district_id       =request()->district_id;
        $clients_loan_request->date_of_birth     =request()->date_of_birth;
        $clients_loan_request->phone_number      =request()->phone_number;
        $clients_loan_request->nin_number        =request()->nin_number;
        $clients_loan_request->tin_number        =request()->tin_number;
        $clients_loan_request->computer_no       =request()->computer_no;
        $clients_loan_request->employment_status =request()->employment_status;
        $clients_loan_request->employer          =request()->employer;
        $clients_loan_request->loan_amount       =request()->loan_amount;
        $clients_loan_request->user_id           =Auth::user()->id;
        $clients_loan_request->save();

        //This saves profile photo in users table
         User::where('id',auth()->user()->id)->update(array('profile_photo_path' =>$client_photo_original_name));

        return redirect('/clients/my-loan-details')->with('msg','Operation Successful');
    }

    /* This function validates the investor details created
    */
   protected function validateLoanRequest(){
       if(empty(request()->date_of_birth)){
           return redirect()->back()->withErrors('Enter DOB to proceed');
       }elseif(empty(request()->phone_number)){
           return redirect()->back()->withErrors('Enter Phone Number to proceed');
       }elseif(empty(request()->nin_number)){
           return redirect()->back()->withErrors('Enter Nin Number to proceed');
       }elseif(empty(request()->tin_number)){
        return redirect()->back()->withErrors('Enter TIN Number to proceed');
       }elseif(empty(request()->computer_no)){
        return redirect()->back()->withErrors('Enter Computer Number to proceed');
       }elseif(empty(request()->loan_amount)){
        return redirect()->back()->withErrors('Enter E to proceed');
       }else{
        return $this->createLoanRequest();
       }
    }

    /**
     * This function gets form for Edit Clients Information.
     * @param int $id
     * @return Renderable
     */
    public function edit($client_id)
    {
        $edit_client =Client::where('id',$client_id)->get();
        return view('clients::edit_client', compact('edit_client'));
    }

    /**
     * Update the specified client in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateClientInfo($client_id)
    {
        Client::where('id',$client_id)->update(array(
            'district_id'       =>request()->district_id,
            'date_of_birth'     =>request()->date_of_birth,
            'phone_number'      =>request()->phone_number,
            'nin_number'        =>request()->nin_number,
            'tin_number'        =>request()->tin_number,
            'computer_no'       =>request()->computer_no,
            'employment_status' =>request()->employment_status,
            'employer'          =>request()->employer,
            'loan_amount'       =>request()->loan_amount,
            'user_id'           =>Auth::user()->id,
        ));
        return redirect('/clients/my-loan-details')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteClient($client_id)
    {
        Client::where('id',$client_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
