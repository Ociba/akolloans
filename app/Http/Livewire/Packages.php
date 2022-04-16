<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;
use Livewire\WithPagination;

class Packages extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $package_name,$from,$to,$investor_interest,$client_interests,$created_by;

     //using the tailwind pagination theme
     protected $paginationTheme = 'bootstrap';
 
     public function updatingSearch()
     {
         $this->resetPage();
     }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.packages',[
            'packages' =>Package::join('users','users.id','packages.created_by')
            ->where('package_name','like',$searchTerm)
            ->orderBy('packages.created_at','DESC')
            ->Paginate($this->per_page,['packages.*','users.name'])
        ]);
    }
}
