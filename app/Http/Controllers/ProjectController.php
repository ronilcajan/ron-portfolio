<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use App\Models\ProjectImages;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Projects';
        
        return view('projects.manage',[
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Projects';
        
        return view('projects.create',[
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectFormRequest $request)
    {
        $validated = $request->validated();

        $validated['working'] = $request->has('working') ? true : false;

        if($request->hasFile('cover_photo')){
            $validated['cover_photo'] = $request->file('cover_photo')->store('projects','public');
        }

        $project = Project::create($validated);

        if($request->file('project_images')){
            foreach ($request->file('project_images') as $image) {
                $filename = $image->store('projects', 'public');
    
                ProjectImages::create([
                    'images' => $filename,
                    'project_id' => $project->id
                ]);
            }
        }
      

        return redirect()->back()->with('status', 'Project created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $title = 'Edit Projects';
        
        return view('projects.edit',[
            'title' => $title,
            'project' => $project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectFormRequest $request, Project $project)
    {
        $validated = $request->validated();

        $validated['working'] = $request->has('working') ? true : false;

        if($request->hasFile('cover_photo')){
            $validated['cover_photo'] = $request->file('cover_photo')->store('projects','public');
        }

        $project->update($validated);

        if($request->file('project_images')){

            ProjectImages::where('project_id', $project->id)->delete();

            foreach ($request->file('project_images') as $image) {
                $filename = $image->store('projects', 'public');

                ProjectImages::create([
                    'images' => $filename,
                    'project_id' => $project->id
                ]);
            }
        }
      

        return redirect()->back()->with('status', 'Project updated');
    }
}