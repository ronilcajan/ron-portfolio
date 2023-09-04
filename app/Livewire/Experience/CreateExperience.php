<?php

namespace App\Livewire\Experience;

use App\Models\Experience;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateExperience extends Component
{

    #[Rule('required|min:3')] 
    public $title ='';

    #[Rule('required|min:3')] 
    public $company  ='';

    #[Rule('required')] 
    public $date_started  ='';

    #[Rule('required')] 
    public $date_ended  ='';

    public $present_work  ='';

    #[Rule('required|min:10')] 
    public $description  ='';

    public function save(){
        $validated =  $this->validate();

        Experience::create($validated);
 
        $this->reset(); 
        
        return $this->back()->with('status', 'Post updated!');

    }

    
    public function render()
    {
        return view('livewire.experience.create-experience');
    }
}