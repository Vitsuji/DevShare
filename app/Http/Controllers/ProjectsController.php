<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Project;
use Session;
use DB;
use File;
use DateTime;

class ProjectsController extends Controller
{
    // When Authentication is set
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id')->paginate(10);
        return view('projects.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'cover_img' => 'required|max:255',
            'description' => 'required',
            'tags' => 'required|max:255',
            'github_repo' => 'max:500',
            'prototype' => 'max:500',
        ]);

        $file = $request->cover_img;
        $now = new DateTime();
        $ido = '0';
        $file_name = $ido.'-'.$now->format('d-N-H-s').$request->cover_img->getClientOriginalName();
        $file->move('img/uploads/project/', $file_name);

        $user = Auth::user();

        $project = new Project;
        
        $project->user_id = $user->id;
        $project->title = $request->title;
        $project->cover_img = $file_name;
        $project->description = $request->description;
        $project->slug = str_slug($request->title, '-');
        $project->collaborators = $request->collaborators;
        $project->tags = $request->tags;
        $project->github_repo = $request->github_repo;
        $project->prototype = $request->prototype;

        $project->save();
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show')->withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('projects.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
