<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class ServicesTable extends Component
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
        return view('livewire.front.services-table',[
            'service' =>Service::join('users','users.id','services.user_id')
            ->where('service','like',$searchTerm)
            ->orderBy('services.created_at','DESC')
            ->Paginate($this->per_page,['services.*','users.name'])
        ]);
    }
}
