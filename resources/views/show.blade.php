@extends('layouts.app')

@section('title', $task->title)

@section('content')

    <div class="mb-4">
        <a href="{{ route('task.index')}}" class="font-medium text-gray-700 underline decoration-pink-500">
            Go back to the task list!
        </a>
    </div>
    <p class="mb-4 text-slate-700">{{ $task->description}}</p>

    @if ($task->long_description)
    <p class="mb-4 text-slate-700">{{ $task->long_description}}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500">Created: {{$task->created_at->diffForHumans()}} . Updated: {{$task->updated_at->diffForHumans()}}</p>
    

    <p>
        @if ($task->completed)
        Completed
        @else
        Not completed
        @endif
    </p>

    <div>
        <a href="{{ route('task.edit', ['task' => $task])}}"> Edit</a>
    </div>

    <div>
        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task])}}">
            @csrf
            @method('PUT')
            <button type="submit">
                Mark as {{ $task->completed ? 'not completed' : 'completed'}}
            </button>
        </form>
    </div>


    <div>
        <form action="{{ route('tasks.destroy', ['task' => $task])}}" method="POST"">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
