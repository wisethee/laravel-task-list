@extends('layouts.app')

@section('title', 'Task List')

@section('main')
    @forelse($tasks as $task)
        <a href="{{route('tasks.show', ['id' => $task->id])}}">{{ $task->title }}</a>
    @empty
        <p>No tasks found</p>
    @endforelse
@endsection
