<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Interest;
use Livewire\WithPagination;

class AdminInterests extends Component
{
    use WithPagination;
    public $per_page="10";
    public $searchTerm;

     //using the tailwind pagination theme
     protected $paginationTheme = 'bootstrap';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin-interests',[
            'interests' =>Interest::join('packages','packages.id','interests.package_id')
            ->join('users','users.id','interests.user_id')
            ->join('clients','clients.user_id','interests.user_id')
            ->where('packages.package_name','like',$searchTerm)
            ->orderBy('interests.created_at','DESC')
            ->Paginate($this->per_page,['interests.*','users.name','clients.loan_amount','packages.package_name','packages.client_interests','packages.investor_interest'])
        ]);
    }
}
