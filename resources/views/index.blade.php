@extends('layouts.app')


@section('title', 'The list of tasks')

@section('content')
<div>
  @forelse ($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->title }}</a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse
  
  @if ($tasks->count())
    <nav> {{ $tasks->links('pagination::simple-bootstrap-5') }} </nav>
    <div> Showing {{ $tasks->firstItem() }} to {{ $tasks->lastItem() }} of {{ $tasks->total() }} results </div> 
  @endif
</div>
@endsection