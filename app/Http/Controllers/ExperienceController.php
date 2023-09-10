<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceFormRequest;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Experience';
        
        return view('experience.manage',[
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Experience';
        
        return view('experience.create',[
            'title' => $title,
        ]);
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceFormRequest $request)
    {
        $validated = $request->validated();
        
        $validated['present_work'] = $request->has('present_work') ? true : false;
        
        Experience::create($validated);

        return redirect()->back()->with('status', 'Experience created'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $exp)
    {
        $title = 'Edit Experience';
        
        return view('experience.edit',[
            'title' => $title,
            'exp' => $exp
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceFormRequest $request, Experience $exp)
    {
        
        $validated = $request->validated();
            
        $validated['present_work'] = $request->has('present_work') ? true : false;

        $update = $exp->update($validated);

        if($update){
            return redirect()->back()->with('status', 'Updated');
        }
    }
}