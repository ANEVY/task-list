@extends('layouts.app')
@section('title','Add Task')
@section('content')
<form action="{{route('tasks.update',['task'=>$task->id])}}" method="post">
    @csrf 
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$task->title}}">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="5">{{$task->description}}</textarea>
    </div>
    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" cols="30" rows="10">{{$task->long_description}}</textarea>
    </div>
    <div>
        <button type="submit">Edit</button>
    </div>

</form>
    
@endsection