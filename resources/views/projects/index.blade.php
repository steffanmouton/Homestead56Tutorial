@extends('layout')


@section('content')
    <h1 class="title">Projects</h1>

    @foreach($projects as $project)
        <li class="list-group">
            <a class="list-group-item" href="/projects/{{ $project->id }}">
                {{ $project->title }}
            </a>
        </li>
    @endforeach
@endsection
