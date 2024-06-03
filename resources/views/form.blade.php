@section('title', isset($task) ? 'Edit task' : 'Create a new task')

@section('main')
    <form method="POST" action="{{isset($task) ? route('tasks.update', ['task'=> $task->id]) : route('tasks.store')}}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$task->title ?? old('title')}}">
            @error('title')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description">{{$task->description ?? old('description')}}</textarea>
            @error('description')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="long_description">Long-Description</label>
            <textarea name="long_description"
                      id="long-description">{{$task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
            <p>{{$message}}</p>
            @enderror
        </div>

        <button type="submit">
            @isset($task)
                Update task
            @else
                Create task
            @endisset
        </button>
    </form>

@endsection
