<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
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
        return view('livewire.users-table',[
            'get_users' =>User::join('categories','categories.id','users.category_id')
            ->Paginate($this->per_page,['users.*','categories.category'])
        ]);
    }
}
