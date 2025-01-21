<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;





// Route::get('/', function () {
//   return redirect()->route('tasks.index');
// });

Route::get('/tasks', function ()  {
    return View('index', [
        'tasks' => \App\Models\Task::latest()->get(),
    ]);
})->name('task.index');


Route::get('/tasks/{id}', function($id)  {
 
  

  return View('show', [ 'task' => \App\Models\Task::findOrFail($id)]);
})->name('task.show');