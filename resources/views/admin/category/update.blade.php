@extends('layouts.app')
@section('content')
    <a href="" class="btn btn-warning mb-3">Go Back</a>
    <form action="{{route('category.update',$category->id)}}" method="post">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group">
            <lable>Enter Category Name</lable>
            <input type="text" name="category" class="form-control" value="{{$category->name}}" required>
        </div>
        <input type="submit" value="Update" class="btn btn-md btn-primary">
    </form>
@endsection