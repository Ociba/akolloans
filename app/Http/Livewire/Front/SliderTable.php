<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Slider;
use Livewire\WithPagination;

class SliderTable extends Component
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
        return view('livewire.front.slider-table',[
            'slides' =>Slider::join('users','users.id','sliders.user_id')
            ->where('title','like',$searchTerm)
            ->orderBy('sliders.created_at','DESC')
            ->Paginate($this->per_page,['sliders.*','users.name'])
        ]);
    }
}
