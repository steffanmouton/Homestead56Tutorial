@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">{{ $project->description }}</div>

    <p>
        <a href="/projects/{{ $project->id }}/edit">Click here to edit me!</a>
    </p>


    @if ($project->tasks->count())
        <div class="box">
            <h2 class="title">Tasks</h2>
            @foreach($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <label for="completed" class="checkbox">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <form method="POST" class="box" action="/projects/{{ $project->id }}/tasks">
        @csrf
        <div class="field">
            <label class="label" for="description">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
    </form>

    @include('errors')


@endsection

