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
        $projects = Project::orderBy('date_started', 'DESC');

        $projects =  $projects->simplePaginate(6);

        return view('livewire.projects.frontend-projects',[
            'projects' => $projects
        ]);
    }
}