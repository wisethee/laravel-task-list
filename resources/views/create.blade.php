@extends('layouts.app')

@section('title', 'Create a new task')

@section('main')
    <form method="POST" action="{{route('tasks.store')}}">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description">{{old('description')}}</textarea>
            @error('description')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="long_description">Long-Description</label>
            <textarea name="long_description" id="long-description">{{old('long_description')}}</textarea>
            @error('long_description')
            <p>{{$message}}</p>
            @enderror
        </div>

        <button type="submit">Create task</button>
    </form>

@endsection
