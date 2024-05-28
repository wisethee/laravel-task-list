@extends('layouts.app')

@section('title', 'Create a new task')

@section('main')
    <form method="POST" action="{{route('tasks.store')}}">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="long_description">Long-Description</label>
            <textarea name="long_description" id="long-description" required></textarea>
        </div>

        <button type="submit">Create task</button>
    </form>

@endsection
