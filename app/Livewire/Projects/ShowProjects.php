<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProjects extends Component
{

    use WithPagination;

    public $search = '';

    public $entries = 5;
    
    public function render()
    {

        $projects = Project::latest();
        
        $projects->when($this->search,function($projects){
            return $projects->where('title', 'like', '%'.$this->search.'%');
        });

        $projects =  $projects->paginate($this->entries);
        
        return view('livewire.projects.show-projects',[
            'projects' => $projects
        ]);
    }


    public function delete(Project $project){
        $project->delete();

        return redirect('/projects')->with('status', 'Project has been deleted');
    }
}