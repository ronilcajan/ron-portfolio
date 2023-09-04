<?php

namespace App\Livewire\Experience;

use Livewire\Component;
use App\Models\Experience;
use Livewire\WithPagination;

class ExperienceList extends Component
{
    use WithPagination;

    public $search ='';

    
    public function render()
    {

        $works = Experience::latest();
        
        $works->when($this->search,function($works){
            return $works->where('title', 'like', '%'.$this->search.'%');
        });

        return view('livewire.experience.experience-list',[
            'works' =>  $works->paginate(5),
        ]);
    }
}