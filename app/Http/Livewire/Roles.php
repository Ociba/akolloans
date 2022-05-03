<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Roles extends Component
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
        return view('livewire.roles',[
            'get_users_for_permission' =>User::where('users.category_id',1)->orwhere('category_id',4)->orderBy('created_at','DESC')
            ->Paginate($this->per_page)
        ]);
    }
}
