<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\News;
use Livewire\WithPagination;

class NewsTable extends Component
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
        return view('livewire.front.news-table',[
            'news' =>News::join('users','users.id','news.user_id')
            ->where('title','like',$searchTerm)
            ->orderBy('news.created_at','DESC')
            ->Paginate($this->per_page,['news.*','users.name'])
        ]);
    }
}
