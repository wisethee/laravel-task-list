<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
use App\Models\Task;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->get(),
    ]);
})->name('tasks.index');

Route::put('/tasks/{id}', function ($id, Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required'
    ]);

    $task = Task::findOrFail($id);
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'Task updated successfully!');
})->name('tasks.update');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id}/edit', function ($id) {
    return view('edit', [
        'task' => Task::findOrFail($id),
    ]);
})->name('tasks.edit');

Route::get('/tasks/{id}', function ($id) {
    return view('show', [
        'task' => Task::findOrFail($id),
    ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'long_description' => 'required|string',
    ]);

    $task = new Task();
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])->with('success', 'Task created!');

})->name('tasks.store');
