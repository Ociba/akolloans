<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\District as Districts;
use Livewire\WithPagination;

class District extends Component
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
        return view('livewire.district',[
            'get_districts' =>Districts::Paginate($this->per_page)
        ]);
    }
}
