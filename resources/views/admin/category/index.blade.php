@extends('layouts.app')
@section('content')
    <a href="{{route('category.create')}}" class="btn btn-success mb-3">Add New Category</a>

    <table class="table table-striped mb-0">
        <tbody>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @php $i= 1; @endphp
        @foreach($categories as $c)
            <tr>
                <td>@php echo $i;$i++;@endphp</td>
                <td>{{$c->name}}</td>
                <td>
                    <a href="{{route('category.edit',$c->id)}}" class="badge badge-warning">Update</a>
                    <form method="post" action="{{route('category.destroy',$c->id)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete" class="badgee badge-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection