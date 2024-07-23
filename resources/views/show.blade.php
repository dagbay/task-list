@extends('layouts.app')

@section('title', $task->title)

@section('content')

<p>{{ $task->description }}</p>

@if ($task->long_description)
  <p>{{ $task->long_description }}</p>
@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

<a href="{{ route('tasks.edit', $task->id) }}"><button>Edit Task</button></a>

<div>
  <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
    @csrf
    @method('DELETE') {{-- Set as DELETE Verb --}}
    <button type="submit">Delete Task</button>
  </form>
</div>
@endsection