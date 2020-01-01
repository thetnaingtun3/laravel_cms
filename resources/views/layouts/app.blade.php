<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{--    <link href="https://bootswatch.com/4/minty/bootstrap.min.css" rel="stylesheet">--}}
    {{--    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/united/bootstrap.min.css" rel="stylesheet">--}}
    <style>

    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
{{--    <div class="container-fluid bg-success mb-5">--}}
{{--        <nav class="container navbar navbar-expand-md navbar-light ">--}}
{{--            <a class="navbar-brand text-white english" href="#.php">--}}
{{--                <img src="assets/img/logo.jpg" alt="" width="30" height="30" class="rounded">--}}
{{--            </a><span class="ml-2 span" style="color: white">Myanmar Royal</span>--}}
{{--            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"--}}
{{--                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"--}}
{{--                    aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarNavDropdown">--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item ">--}}
{{--                        <a class="nav-link text-white english" href="index.php">Home <span class="sr-only">(current)</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-white english" href="#">Features</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item"><a class="nav-link text-white english" href="login.php"><span--}}
{{--                                    class="glyphicon glyphicon-user"></span> Sign Up</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link text-white english" href="register.php"><span--}}
{{--                                    class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle text-white english" href="#" id="navbarDropdownMenuLink"--}}
{{--                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Category--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item english" href="#">Test</a>--}}
{{--                            <a class="dropdown-item english" href="#">Best </a>--}}
{{--                            <a class="dropdown-item english" href="#">Hack </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}


<!-- container start-->

    <main class="container">
        <div class="row">
            <div class="col-md-4">
                @if(Auth::check())
                    <ul class="list-group">
                        <li class="bg-success text list-group-item "><a href="" class="text-white">Control Panel</a>
                        </li>
                        <li class="list-group-item"><a href="">Dashboard</a></li>
                        <li class="list-group-item"><a href="{{url('admin/user/'.Auth::user()->id)}}">My Profile</a>
                        </li>
                        <li class="list-group-item"><a href="{{route('post.index')}}">Posts</a></li>
                        <li class="list-group-item"><a href="{{route('category.index')}}">Category</a></li>
                        <li class="list-group-item"><a href="{{route('tag.index')}}">Tag</a></li>
                        <li class="list-group-item"><a href="{{url('admin/user')}}">User</a></li>
                    </ul>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Control
                    </div>
                    <div class="card-body">
                        @include('layouts.error')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
</body>
</html>
