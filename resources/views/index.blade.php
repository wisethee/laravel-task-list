@extends('layouts.app')

@section('title', 'Task List')

@section('main')
    <div>
        <a href="{{route('tasks.create')}}">Create a new task</a>
    </div>
    @forelse($tasks as $task)
        <a href="{{route('tasks.show', ['task' => $task->id])}}">{{ $task->title }}</a>
    @empty
        <p>No tasks found</p>
    @endforelse

    @if($tasks->count())
        {{$tasks->links()}}
    @endif
@endsection
