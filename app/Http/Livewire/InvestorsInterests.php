<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Interest;
use Livewire\WithPagination;

class InvestorsInterests extends Component
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
        return view('livewire.investors-interests',[
            'investor_interests' =>Interest::join('users','users.id','interests.user_id')
            ->join('investors','investors.package_id','interests.package_id')
            ->join('packages','packages.id','investors.package_id')
            ->join('clients','clients.package_id','interests.package_id')
            ->where('investors.bought_by', auth()->user()->id)
            ->orderBy('interests.created_at','DESC')
            ->Paginate($this->per_page,['interests.*','users.name','clients.loan_amount','packages.package_name','packages.investor_interest'])
        ]);
    }
}
