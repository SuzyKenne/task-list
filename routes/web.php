<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\TaskRequest;




// Route::get('/', function () {
//   return redirect()->route('tasks.index');
// });

Route::get('/tasks', function ()  {
    return View('index', [
        'tasks' => Task::latest()->where('completed', true)->get(),
    ]);
})->name('task.index');

Route::view('/tasks/create', 'create' )->name('tasks.create');

Route::get('/tasks/{task}/edit', function(Task $task)  {
 
   return View('edit', [ 'task' => $task]);
  })->name('task.edit');

Route::get('/tasks/{task}', function(Task $task)  {
 
  return View('show', [ 'task' => $task]);
})->name('tasks.show');




Route::post('/tasks', function (TaskRequest $request) {
  

  $task = Task::create($request->validated());


  return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created successfully!');
})->name('tasks.store');




Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
 
  // $data = ;
  // $task = Task::findOrFail($id);
  // $task->title = $data['title'];
  // $task->description = $data['description'];
  // $task->long_description = $data['long_description'];

  $task->update($request->validated());

  return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully!');
})->name('tasks.update');

Route::delete('/tasks/{task}', function(Task $task){
  $task->delete();

  return redirect()->route('task.index')->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');