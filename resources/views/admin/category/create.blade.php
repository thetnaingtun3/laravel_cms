@extends('layouts.app')
@section('content')
    <a href="{{route('category.index')}}" class="btn btn-warning mb-3">Go Back</a>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <lable>Enter Category Name</lable>
            <input type="text" name="category" class="form-control" required>
        </div>
        <input type="submit" value="Add" class="btn btn-md btn-primary">
    </form>
@endsection