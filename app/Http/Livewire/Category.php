<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Cat;
use Livewire\WithPagination;

class Category extends Component
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
        return view('livewire.category',[
            'get_categories' =>Cat::where('category','like',$searchTerm)->Paginate($this->per_page)
        ]);
    }
}
