<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\District as Districts;
use Livewire\WithPagination;

class District extends Component
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
        return view('livewire.district',[
            'get_districts' =>Districts::where('district','like',$searchTerm)->Paginate($this->per_page)
        ]);
    }
}
