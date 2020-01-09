@extends('layouts.app')
@section('content')
    <a href="{{route('user.c')}}" class="btn btn-sm btn-success">Add New User</a>
    <table class="table table-striped">
        <tr class="tr">
            <td>No</td>
            <td>Image</td>
            <td>Name</td>
            <td>Role</td>
            <td>Set Permission</td>
        </tr>
        @php $i = 1;@endphp

        @foreach($user as $c )
            <tr class="tr">
                <td>@php  echo $i;$i++;@endphp</td>
                <td>
{{--                    <img src="{{asset('profile/'.$c->profile->profile_image)}}" width="50" alt="">--}}
                </td>
                <td>{{$c->name}}</td>
                <td>
                    @if($c->is_admin == 1)
                        Admin
                    @else
                        User
                    @endif

                </td>
                <td>

                    @if($c->is_admin == 0)
                        <a href="{{route('user.edit.role',[1,$c->id])}}" class="badge badge-warning">Set Admin</a>
                    @else
                        <a href="{{route('user.edit.role',[0,$c->id])}}" class="badge badge-success">Set User</a>
                    @endif

                </td>
            </tr>
        @endforeach
    </table>
@endsection
