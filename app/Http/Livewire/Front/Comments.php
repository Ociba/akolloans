<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Comment;
use Livewire\WithPagination;

class Comments extends Component
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
        return view('livewire.front.comments',[
            'comments' =>Comment::join('users','users.id','comments.user_id')->where('comments.comment','like',$searchTerm)
            ->where('comments.status','no reply')
            ->orderBy('comments.created_at','DESC')
            ->Paginate($this->per_page,['comments.*','users.name'])
        ]);
    }
}
