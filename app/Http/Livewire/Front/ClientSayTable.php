<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\HappyClients;
use Livewire\WithPagination;

class ClientSayTable extends Component
{
    use WithPagination;
    public $searchTerm;
    public $per_page="10";

    //using the tailwind pagination theme
    protected $paginationTheme = 'bootstrap';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.front.client-say-table',[
            'clients_say' =>HappyClients::join('users','users.id','happy_clients.user_id')
            ->where('clients_name','like',$searchTerm)
            ->orderBy('happy_clients.created_at','DESC')
            ->Paginate($this->per_page,['happy_clients.*','users.name'])
        ]);
    }
}
