@extends('layouts.app')
@section('content')

    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="form-group">
            <lable>Enter User Name</lable>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <lable>Enter Email</lable>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <lable>Enter Password</lable>
            <input type="password" name="password" class="form-control" required>
        </div>
        <input type="submit" value="Add" class="btn btn-md btn-primary">
    </form>
@endsection
