@extends('layouts.app')
@section('content')
    <a href="{{route('post.index')}}" class="btn btn-warning mb-3">Go Back</a>
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Choose Category</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Choose Tag</label>
            <div class="checkbox">
                @foreach($tags as $t)
                <label for="">{{$t->name}}
                    <input type="checkbox" name="tags[]" value="{{$t->id}}">
                </label>
                    @endforeach
            </div>
        </div>
        <div class="form-group">
            <lable>Enter Post Title</lable>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Enter Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="">Choose Featured Image</label>
            <input type="file" name="image">
        </div>
        <input type="submit" value="Add" class="btn btn-md btn-primary">
    </form>
@endsection