@extends('layouts.app')
@section('content')
    <a href="{{route('post.create')}}" class="btn btn-success mb-3">Add New Post</a>
    <a href="{{route('post.index')}}" class="btn btn-primary mb-3">View All Post</a>

    <p>Title :: {{$post->title}}</p>
    <p>Category :: {{$post->category->name}}</p>
    <p> Description:: {{$post->content}}</p>
    <p> Image:: <img src="{{asset('images/'.$post->featured)}}" width="200px" height="200px" class="img-fluid img-thumbnail"></p>
@endsection