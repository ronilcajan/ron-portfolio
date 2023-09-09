<?php

namespace App\Livewire\Experience;

use Livewire\Component;
use App\Models\Experience;
use Livewire\WithPagination;

class ExperienceList extends Component
{
    use WithPagination;

    public $search = '';

    public $entries = 5;

    public function render()
    {

        $works = Experience::latest();
        
        $works->when($this->search,function($works){
            return $works->where('title', 'like', '%'.$this->search.'%');
        });

        $works =  $works->paginate($this->entries);


        return view('livewire.experience.experience-list',[
            'works' =>  $works,
        ]);
    }

    public function delete(Experience $experience){
        $experience->delete();

        return redirect('/experience')->with('status', 'Experience has been deleted');
    }

}