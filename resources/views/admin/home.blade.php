@extends('layouts.app')
@section('content')
    <div class="wrapper" id="page-wrapper">
        <div class="container col-md-auto" id="content" tabindex="-1">
            <div class="row">
                <div class="metr">
                    <a class="metrostyle eenmertro bg-warning rounded" style="cursor: pointer" href="#">
                    <span class="fa fa-tag"
                          style="font-size: 2em; color: white; padding-left: 0.3em; margin-top: 3px;float:left"></span>
                        <span
                            style="color: white; font-size: 1.1em; float: right; margin-top: 5px; padding-right: 0.2em">{{$postCount}}</span>
                        <span style="color: white; float: left; margin-top: 35px; margin-left: 10px;margin-right:80px">Post List</span>
                    </a>
                    <a class="metrostyle yoomertro bg-info rounded" style="cursor: pointer" href="#">
                    <span class="fa fa-bars"
                          style="font-size: 2em; color: white; padding-left: 0.3em; margin-top: 3px;float:left"></span>
                        <span
                            style="color: white; font-size: 1.1em; float: right; margin-top: 5px; padding-right: 0.2em">{{$categoryCount}}</span>
                        <span style="color: white; float: left; margin-top: 35px; margin-left: 10px;margin-right:80px">Category List </span>
                    </a>
                    <a class="metrostyle eenmertro bg-dark rounded" style="cursor: pointer" href="#">
                    <span class="fa fa-newspaper-o"
                          style="font-size: 2em; color: white; padding-left: 0.3em; margin-top: 3px;float:left"></span>
                        <span
                            style="color: white; font-size: 1.1em; float: right; margin-top: 5px; padding-right: 0.2em">{{$tagCount}}</span>
                        <span style="color: white; float: left; margin-top: 35px; margin-left: 10px;margin-right:80px">Tag List </span>
                    </a>
                    <a class="metrostyle metrostylelarge eenmertro bg-success rounded" style="cursor: pointer"
                       href="#">
                    <span class="fa fa-user"
                          style="font-size: 2em; color: white; padding-left: 0.3em; margin-top: 3px;float:left"></span>
                        <span
                            style="color: white; font-size: 1.1em; float: right; margin-top: 5px; padding-right: 0.2em">{{$userCount}}</span>
                        <span style="color: white; float: left; margin-top: 35px; margin-left: 10px;margin-right:80px">User List </span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">

                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Image</td>
                    </tr>
                    @php $i = 1;@endphp
                    @foreach($post as $p)
                        <tr>
                            <td>@php echo $i; $i++ @endphp</td>
                            <td>{{$p->title}}</td>
                            <td><img src="{{asset('images/'.$p->featured)}}"
                                     style="width: 70px; height: 50px; border-radius: 20%;"
                                     alt=""></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-4 mt-3">
                <ul class="list-group">
                    @php $i = 1;@endphp
                    @foreach($category as $c)

                        <li class="list-group-item bg-success text-white">Category List</li>
                        <li class="list-group-item">
                            <span class="float-left">@php echo $i; $i++ @endphp</span>
                            <span class="badge badge-info float-right text-white">{{$c->name}}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 mt-3">
                <ul class="list-group">
                    @php $i = 1;@endphp
                    @foreach($tags as $c)

                        <li class="list-group-item bg-secondary text-white">Tag List</li>
                        <li class="list-group-item">
                            <span class="float-left">@php echo $i; $i++ @endphp</span>
                            <span class="badge badge-info float-right text-white">{{$c->name}}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4 mt-3">
                <ul class="list-group">
                    @php $i = 1;@endphp
                    @foreach($users as $c)

                        <li class="list-group-item bg-warning text-white">User List</li>
                        <li class="list-group-item">
                            <span class="float-left">@php echo $i; $i++ @endphp</span>
                            <span class="badge badge-info float-right text-white">{{$c->name}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

@stop


