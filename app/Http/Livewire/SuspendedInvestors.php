<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Investor;
use Livewire\WithPagination;

class SuspendedInvestors extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $package_id,$district_id,$bought_by,$amount_deposited,$period,$state,$contact,$name;

     //using the tailwind pagination theme
     protected $paginationTheme = 'bootstrap';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.suspended-investors',[
            'suspended_investors' =>Investor::join('districts','districts.id','investors.district_id')
            ->join('packages','packages.id','investors.package_id')
            ->join('users','users.id','investors.bought_by')
            ->where('investors.investor_status','suspended')
            ->where('name','like',$searchTerm)
            ->orderBy('investors.created_at','DESC')
            ->Paginate($this->per_page,['investors.*','users.name','users.email','districts.district','packages.package_name','packages.investor_interest'])
        ]);
    }
}
