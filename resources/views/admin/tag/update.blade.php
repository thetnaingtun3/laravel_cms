@extends('layouts.app')
@section('content')
    <a href="{{route('tag.index')}}" class="btn btn-warning mb-3">Go Back</a>
    <form action="{{route('tag.update',$tag->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group">
            <lable>Enter Tag Name</lable>
            <input type="text" name="tag" class="form-control" value="{{$tag->name}}" required >
        </div>
        <input type="submit" value="Update" class="btn btn-md btn-primary">
    </form>
@endsection