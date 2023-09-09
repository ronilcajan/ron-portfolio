<?php

namespace App\Livewire\Education;

use Livewire\Component;
use App\Models\Education;
use Livewire\WithPagination;

class ShowEducation extends Component
{
    use WithPagination;

    public $search = '';

    public $entries = 5;
    
    public function render()
    {

        $educations = Education::latest();
        
        $educations->when($this->search,function($educations){
            return $educations->where('course', 'like', '%'.$this->search.'%')
            ->where('school', 'like', '%'.$this->search.'%');
        });

        $educations =  $educations->paginate($this->entries);
        
        return view('livewire.education.show-education',[
            'educations' => $educations
        ]);
    }

    public function delete(Education $education){
        $education->delete();
        return redirect('/education')->with('status', 'Education has been deleted');
    }
}