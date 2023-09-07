<?php

namespace App\Livewire\Experience;

use App\Models\Experience;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateExperience extends Component
{

    #[Rule('required|min:3')] 
    public $title = "";

    #[Rule('required|min:3')] 
    public $company  = "";

    #[Rule('required')] 
    public $date_started  = "";
    
    #[Rule('required|min:10')] 
    public $description = "";

    public $date_ended  = "";
    public $present_work = true;


    public function create(){
        
        $this->validate();

        $data = [
            'title' => $this->title,
            'company' => $this->company,
            'date_started' => $this->date_started,
            'description' => $this->description,
        ];
        
        $data['present_work'] = $this->present_work;
        $this->date_ended ? $data['date_ended'] = $this->date_ended : null;
        
        Experience::create($data);

        return redirect(route('experience.create'))->with('status', 'Your experience added');
        
    }

    
    public function render()
    {
        return view('livewire.experience.create-experience');
    }
}