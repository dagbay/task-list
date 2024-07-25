@extends('layouts.app')

@section('title', $task->title)

@section('content')

<p>{{ $task->description }}</p>

@if ($task->long_description)
  <p>{{ $task->long_description }}</p>
@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

<p>
  @if ($task->completed) 
    Completed
  @else
    Not Completed
  @endif
</p>

<div>
  <a href="{{ route('tasks.edit', ['task' => $task]) }}"><button>Edit Task</button></a>
</div>

<div>
  <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
    @csrf
    @isset($task)
      @method('PUT')
    @endisset
    <button type="submit">Mark as {{ $task->completed ? 'Not Completed' : 'Completed' }}</button>
  </form>
</div>

<div>
  <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST">
    @csrf
    @isset($task)
      @method('DELETE') {{-- Set as DELETE Verb --}}
    @endisset 
    <button type="submit">Delete Task</button>
  </form>
</div>
@endsection