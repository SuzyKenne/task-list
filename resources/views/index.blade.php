<h1>The List of Tasks</h1>

<div>
    
        @forelse ($tasks as $task)
        <div>
            <a href="{{ route('task.show', ['id' => $task->id])}}">{{ $task->title}}</a>
        </div>
        @empty
        <div>There are no tasks!</div>
        @endforelse
   
</div>