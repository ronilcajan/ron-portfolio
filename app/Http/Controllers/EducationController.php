<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationFormRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Education';
        
        return view('education.manage',[
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Education';
        
        return view('education.create',[
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationFormRequest $request)
    {
        $validated = $request->validated();
        
        Education::create($validated);

        return redirect()->back()->with('status', 'Education created'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        $title = 'Edit Education';
        
        return view('education.edit',[
            'title' => $title,
            'education' => $education
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationFormRequest $request, Education $education)
    {
        $validated = $request->validated();

        $education->update($validated);

        return redirect()->back()->with('status', 'Education updated'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
    }
}