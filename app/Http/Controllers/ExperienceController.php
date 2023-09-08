<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, Experience $exp)
    {
        $validated = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'date_started' => 'required',
            'date_ended' => 'required',
            'present_work' => '',
            'description' => 'required|min:10',
        ]);

        $update = $exp->update($validated);

        if($update){
            return redirect()->back()->with('status', 'Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}