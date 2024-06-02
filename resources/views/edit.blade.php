@extends('layouts.app')

@section('title', 'Edit task')

@section('main')
    <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$task->title}}">
            @error('title')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description">{{$task->description}}</textarea>
            @error('description')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="long_description">Long-Description</label>
            <textarea name="long_description" id="long-description">{{$task->long_description}}</textarea>
            @error('long_description')
            <p>{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Update task</button>
    </form>

@endsection
