@extends('layout')

@section('content')
    <h1 class="title">Create a new Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Project Title</label>
            <div class="control">
                <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" text="text" name="title" placeholder="Project Title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Project Description</label>
            <div class="control">
                <textarea class="input {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project Description" value="{{ old('description') }}"></textarea>
            </div>
        </div>

        <div>
            <button type="submit" class="button is-link">Create Project</button>
        </div>

        @if ($errors->any())
        <div class="notification is-danger" style="margin-top: 10px">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </form>
@endsection
