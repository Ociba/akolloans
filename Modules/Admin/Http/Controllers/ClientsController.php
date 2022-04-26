<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 
use App\Models\Client;
use App\Models\District;
use Auth;

class ClientsController extends Controller
{
      /**
     * This function gets all Clients.
     */
    public function getClients()
    {
        return view('admin::all_clients');
    }

      /**
     * This function gets all Clients with loans.
     */
    public function getClientsWithLoans()
    {
        return view('admin::clients_with_loans');
    }
       /**
     * This function gets all Clients loan Defaulters.
     */
    public function getClientsLoanDefaulters()
    {
        return view('admin::loan_defaulters');
    }
    /**
     * This function gets the interests list
     */
    public function getInterestsList()
    {
        return view('admin::intrests');
    }
    /**
     * This function gets clients edit form
     */
    protected function editClientInfo($client_id){
        $get_district =District::select('id','district')->get();
        $edit_client =Client::where('id',$client_id)->get();
        return view('admin::edit_client', compact('edit_client','get_district'));
    }
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
            'loan_status'       =>request()->loan_status,
            'user_id'           =>Auth::user()->id,
        ));
        return redirect()->back()->with('msg','Operation Successful');
    }
    public function deleteClient($client_id)
    {
        Client::where('id',$client_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
