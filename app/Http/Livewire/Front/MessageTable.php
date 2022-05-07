<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Message;
use Livewire\WithPagination;

class MessageTable extends Component
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
        return view('livewire.front.message-table',[
            'messages' =>Message::where('investor_name','like',$searchTerm)
            ->orderBy('created_at','DESC')
            ->Paginate($this->per_page,['messages.*'])
        ]);
    }
}
