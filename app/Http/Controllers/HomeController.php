<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageFormRequest;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Messages;
use App\Models\Project;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Home';

        $educations = Education::orderBy('date_graduated','ASC')->get();

        $experiences = Experience::orderBy('present_work','DESC')->get();

        $services = Services::all();

        $profile = User::first();

        return view('home.manage',[
            'title' => $title,
            'educations' =>  $educations,
            'experiences' =>  $experiences,
            'services' =>  $services,
            'profile' =>  $profile,
        ]);
    }


     /**
     * Store a newly created resource in storage.
     */
    public function store(MessageFormRequest $request)
    {
        $validated = $request->validated();

        Messages::create($validated);

        return redirect()->back()->with('status', 'Message sent successfully');
    }

    public function show(Project $project)
    {
        $profile = User::first();
        return view('home.project_details',[
            'project' => $project,
            'profile' =>  $profile,
        ]);
    }
}