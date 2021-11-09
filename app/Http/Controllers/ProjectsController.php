<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {

        $projects = Project::all();

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

        Project::create($validated);

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
        return view('projects.show', compact("project"));
    }
}
