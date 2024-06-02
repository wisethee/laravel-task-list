<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use \App\Http\Requests\TaskRequest;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->get(),
    ]);
})->name('tasks.index');

Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
    $data = $request->validated();
    $task->update($data);

    return redirect()->route('tasks.show', ['task' => $task->id])
        ->with('success', 'Task updated successfully!');
})->name('tasks.update');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();

    return redirect()->route('tasks.index')
        ->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');

Route::get('/tasks/{task}/edit', function (task $task) {
    return view('edit', [
        'task' => $task
    ]);
})->name('tasks.edit');

Route::get('/tasks/{task}', function (Task $task) {
    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

Route::post('/tasks', function (TaskRequest $request) {
    $data = $request->validated();
    $task = Task::create($data);

    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created!');

})->name('tasks.store');
