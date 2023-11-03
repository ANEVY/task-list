@extends('layouts.app')

{{-- title --}}
@section('title','List of tasks')

{{-- content --}}
@section('content')
    <!-- tasks -->
    <div id="task-wrapper">
        @forelse ($tasks as $task)
            <a href="{{route('tasks.show',['task'=>$task->id])}}">
                <h5>{{$task->title}}</h5>
            </a>
            
        @empty
            <p>No task found</p>
        @endforelse
        @if ($tasks)
            <div>
                {{$tasks->links()}}
            </div>
        @endif
    </div>
@endsection