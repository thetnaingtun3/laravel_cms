@extends('layouts.app')
@section('content')
    <a href="{{route('tag.index')}}" class="btn btn-warning mb-3">Go Back</a>
    <form action="{{route('tag.store')}}" method="post">
        @csrf
        <div class="form-group">
            <lable>Enter Tag Name</lable>
            <input type="text" name="name" class="form-control" required>
        </div>
        <input type="submit" value="Add" class="btn btn-md btn-primary">
    </form>
@endsection