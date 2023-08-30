<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index(){


        $title = 'Portfolio';

        return view('welcome', compact('title'));
    }
}