<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['completed', 'project_id', 'description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function completeTask($completed = true)
    {
        $this->update(compact('completed'));
    }
}
