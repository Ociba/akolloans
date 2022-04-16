<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class LoanDefaulters extends Component
{
    use WithPagination;
    public $per_page="10";

     //using the tailwind pagination theme
     protected $paginationTheme = 'bootstrap';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        return view('livewire.loan-defaulters',[
            'loan_defaulter' =>Client::join('districts','districts.id','clients.district_id')
            ->join('packages','packages.id','clients.package_id')
            ->join('users','users.id','clients.user_id')
            ->where('clients.loan_status','overdue')
            ->orderBy('clients.created_at','DESC')
            ->Paginate($this->per_page,['clients.*','users.name','users.email','districts.district','packages.package_name','packages.client_interests'])
        ]);
    }
}
