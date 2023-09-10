<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesFormRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Services';
        
        return view('services.manage',[
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Services';
        
        return view('services.create',[
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesFormRequest $request)
    {
        
        $validated = $request->validated();

        if($request->hasFile('icon')){
            $validated['icon'] = $request->file('icon')->store('services','public');
        }

        Services::create($validated);

        return redirect()->back()->with('status', 'Services created');

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        $title = 'Edit Services';
        
        return view('services.edit',[
            'title' => $title,
            'services' => $services,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesFormRequest $request, Services $services)
    {
        $validated = $request->validated();

        if($request->hasFile('icon')){
            $validated['icon'] = $request->file('icon')->store('services','public');
        }

        $services->update($validated);

        return redirect()->back()->with('status', 'Services updated');
    }
}