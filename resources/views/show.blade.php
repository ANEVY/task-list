@extends('layouts.app')
{{-- title --}}
{{-- For best practice do not close the section directives
     when the section renders a string and not html 
     --}}
@section('title',$task->title)

@section('content')
    <p>{{$task->description}}</p>
@if ($task->long_description)
<p>{{$task->long_description}}</p>
@endif
<p>{{$task->completed}}</p>
<p>{{$task->created_at}}</p>
<p>{{$task->updated_at}}</p>
<form action="{{route('tasks.destroy',['tasks'=>$task->id])}}" method="post">
    <button type="submit">Delete</button>
</form>
@endsection

