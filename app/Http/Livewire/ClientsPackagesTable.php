<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;
use Livewire\WithPagination;

class ClientsPackagesTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";
    public $package_name,$from,$to,$investor_interest;
    //using the tailwind pagination theme
    protected $paginationTheme = 'bootstrap';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.clients-packages-table',[
            'packages' =>Package::where('package_name','like',$searchTerm)
            ->Paginate($this->per_page)
        ]);
    }
}
