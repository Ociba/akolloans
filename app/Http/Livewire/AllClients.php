<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class AllClients extends Component
{
    use WithPagination;
    public $per_page="10";
    public $searchTerm;
    public $name,$email;

     //using the tailwind pagination theme
     protected $paginationTheme = 'bootstrap';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.all-clients',[
            'clients_with_paid_loans' =>Client::join('districts','districts.id','clients.district_id')
            ->join('packages','packages.id','clients.package_id')
            ->join('users','users.id','clients.user_id')
            ->where('clients.computer_no','like',$searchTerm)
            //->where('users.name','like',$searchTerm)
            ->where('clients.loan_status','paid')
            ->orderBy('clients.created_at','DESC')
            ->Paginate($this->per_page,['clients.*','users.name','users.email','districts.district','packages.package_name','packages.client_interests'])
        ]);
    }
}
