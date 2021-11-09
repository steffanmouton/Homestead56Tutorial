<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        $task->completeTask(request()->has('completed'));

        return back();
    }

    public function store(Project $project)
    {

        $validated = request()->validate(['description'=>'required']);

        $project->addTask($validated);

//        Task::create([
//            'description' => request('description'),
//            'project_id' => $project->id
//        ]);

        return back();
    }
}
