<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Investor;
use Livewire\WithPagination;

class InvestorsPackages extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $package_id,$district_id,$bought_by,$amount_deposited,$period,$state,$contact;

     //using the tailwind pagination theme
     protected $paginationTheme = 'bootstrap';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.investors-packages',[
            'my_packages' =>Investor::join('districts','districts.id','investors.district_id')
            ->join('packages','packages.id','investors.package_id')
            ->join('users','users.id','investors.bought_by')
            ->where('users.id',auth()->user()->id)
            ->where('investors.created_at','like',$searchTerm)
            ->Paginate($this->per_page,['investors.*','districts.district','packages.package_name','packages.investor_interest'])
        ]);
    }
}
