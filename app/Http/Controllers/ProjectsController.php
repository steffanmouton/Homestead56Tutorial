<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //auth()->id();
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.index', ['projects'=>$projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => ['required', 'min: 3'],
            'description' => 'required'
        ]);

        $attributes = $validated;

        $attributes['owner_id'] = auth()->id();

//        $Project = new Project();
//
//        $Project->title = request('title');
//        $Project->description = request('description');
//
//        $Project->save();
//
//        =========================================================
//
//        Project::create([
//            'title' => request('title'),
//            'description' => request('description')
//        ]);

        Project::create($attributes);

        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
//        $Project->title = request('title');
//        $Project->description = request('description');
//
//        $Project->save();

        $validated = request()->validate([
            'title' => ['required', 'min: 3'],
            'description' => 'required'
        ]);

        $project->update($validated);
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function show(Project $project)
    {

        $this->authorize('update', $project);

        return view('projects.show', compact("project"));
    }
}
