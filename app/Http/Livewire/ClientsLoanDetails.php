<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class ClientsLoanDetails extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
      //using the tailwind pagination theme
      protected $paginationTheme = 'bootstrap';
 
      public function updatingSearch()
      {
          $this->resetPage();
      }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.clients-loan-details',[
            'my_loan_request_info' =>Client::join('districts','districts.id','clients.district_id')
            ->join('users','users.id','clients.user_id')
            ->where('users.id',auth()->user()->id)
            ->where('clients.created_at','like',$searchTerm)
            ->Paginate($this->per_page,['clients.*','districts.district'])
        ]);
    }
}
