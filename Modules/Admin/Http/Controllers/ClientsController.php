<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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

   
}
