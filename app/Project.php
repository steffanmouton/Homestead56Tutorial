<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
//        return Task::create([
//            'description' => request('description'),
//            'project_id' => $this->id
//        ]);
        $this->tasks()->create($task);

    }
}
