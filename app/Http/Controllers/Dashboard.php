<?php

namespace App\Http\Controllers;

use App\Models\Keywords;
use App\Models\Project;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $keywords = Keywords::where('keyword_spell', null)->pluck('keyword');
        //get all projects from the database for current user
        //$project = Project::where('user_id', auth()->user()->id)->get();
        $projects = auth()->user()->projects()->get();


        return view('dashboard')->with(compact('keywords', 'projects'));
    }

}
