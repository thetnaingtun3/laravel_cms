@extends('layouts.app')
@section('content')
    <form action="{{url('admin/user/'.$user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <lable>Enter User Name</lable>
            <input type="text" name="name" class="form-control" required value="{{$user->name}}">
        </div>
        <div class="form-group">
            <lable>Enter Email</lable>

            <input type="email" name="email" class="form-control" required value="{{$user->email}}">
        </div>
        <div class="form-group">
            <lable>Enter Password</lable>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <lable>Enter Facebook</lable>
            <input type="text" name="facebook_link" class="form-control" required
                   value="{{$user->profile->facebook_link}}">
        </div>
        <div class="form-group">
            <lable>Enter Youtube</lable>
            <input type="text" name="youtube_link" class="form-control" required
                   value="{{$user->profile->youtube_link}}">
        </div>
        <div class="form-group">
            <label for="">Choose File</label>
            <input type="file" name="image">
            <img src="{{asset('profile/'.$user->profile->profile_image)}}" width="100px" alt="">
        </div>
        <div class="form-group">
            <label for="">About</label>
            <textarea name="about" id="" cols="30" rows="4" class="form-control">{{$user->profile->about}}</textarea>

        </div>
        <input type="submit" value="Update Profile" class="btn btn-md btn-primary">
    </form>
@endsection
