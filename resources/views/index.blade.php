@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
  <nav class="mb-4">
    <button class="link">
      <a href="{{ route('tasks.create') }}">→ Add Task</a>
    </button>
  </nav>

  @forelse ($tasks as $task)
    <div>
      •
      <a href="{{ route('tasks.show', ['task' => $task]) }}" @class(['font-bold', 'line-through' => $task->completed])>
        {{ $task->title }}
      </a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse
  
  @if ($tasks->count())
    <nav class="mt-4"> {{ $tasks->links() }} </nav>
  @endif
@endsection