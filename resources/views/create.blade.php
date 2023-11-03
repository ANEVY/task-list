@extends('layouts.app')
@section('title','Add Task')
@section('content')
<form action="{{route('tasks.store')}}" method="post">
    @csrf 
    {{$errors}}
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="5">{{old('description')}}</textarea>
    </div>
    <div>
        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" cols="30" rows="10">{{old('long_description')}}</textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>
    
@endsection