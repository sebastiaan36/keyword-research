<?php

namespace App\Http\Controllers;

use App\Models\Keywords;
use App\Http\Requests\StoreKeywordsRequest;
use App\Http\Requests\UpdateKeywordsRequest;
use GuzzleHttp\Psr7\Request;


class KeywordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($project_id)
    {
        //get all keywords from the database for the project_id
        $keywords = Keywords::where('project_id', $project_id)->get();
        return view('project.keyword.index')->with(compact('keywords', 'project_id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($project_id)
    {
        //show the form to create a new keyword
        return view('project.keyword.create')->with('project_id', $project_id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKeywordsRequest $request)
    {
        //break every line of the textarea into an array
        $keywords = explode("\n", $request->keyword);
        //dd($keywords);
        //store the values in the database
        foreach ($keywords as $keyword) {
            $k = new Keywords();
            $k->keyword = strip_tags($keyword);
            $k->user_id = auth()->user()->id;
            $k->project_id = $request->project_id;
            $k->save();
        }
        return view('dashboard')->with('status', 'Keywords created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keywords $keywords)
    {
        //get the keyword id from the url


        //get the values of the keyword

        return view('project.keyword.show')->with('keywords', $keywords);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keywords $keywords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKeywordsRequest $request, Keywords $keywords)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keywords $keywords)
    {
        //
    }
}
