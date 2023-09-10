<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Services;
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

        return view('welcome',[
            'title' => $title,
            'educations' =>  $educations,
            'experiences' =>  $experiences,
            'services' =>  $services,
        ]);
    }
}