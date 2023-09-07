<?php

namespace App\Livewire\Experience;

use Livewire\Component;
use Livewire\Attributes\Rule;

class EditExperience extends Component
{

    #[Rule('required|min:3')] 
    public $title ='';

    #[Rule('required|min:3')] 
    public $company  ='';

    #[Rule('required')] 
    public $date_started  ='';

    #[Rule('required')] 
    public $date_ended  ='';

    #[Rule('required|min:10')] 
    public $description  ='';

    public $present_work  ='';
    
    public function render()
    {
        return view('livewire.experience.edit-experience');
    }
}