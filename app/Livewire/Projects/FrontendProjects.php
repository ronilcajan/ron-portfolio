<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendProjects extends Component
{
    use WithPagination;
    
    public function render()
    {
        $projects = Project::latest();

        $projects =  $projects->simplePaginate(8);

        return view('livewire.projects.frontend-projects',[
            'projects' => $projects
        ]);
    }
}