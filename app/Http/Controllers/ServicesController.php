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
            $validated['icon'] = $request->file('icon')->store('icon','public');
        }

        Services::create($validated);

        return redirect()->back()->with('status', 'Services created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        //
    }
}