@extends('layouts.app')

@section('title', 'Task List')

@section('main')
    @forelse($tasks as $task)
        <a href="{{route('tasks.show', ['task' => $task->id])}}">{{ $task->title }}</a>
    @empty
        <p>No tasks found</p>
    @endforelse
@endsection
