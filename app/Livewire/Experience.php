<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Experience as ExperienceModel;

class Experience extends Component
{

    public $experience;
    

    public function create_exp()
    {
        
    }

    public function render()
    {
        $this->experience = ExperienceModel::all();
        
        $title = 'Experience';
        return view('livewire.experience', compact('title'));
    }
    
}