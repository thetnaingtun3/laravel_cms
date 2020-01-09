@extends('layouts.layout')
@section('content')
    <div class="row">
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                    <strong class="blue-text">MDB</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/"
                               target="_blank">About MDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect"
                               href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                               target="_blank">Free download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/"
                               target="_blank">Free
                                tutorials</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect"
                               target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/mdbootstrap/bootstrap-material-design"
                               class="nav-link border border-light rounded waves-effect"
                               target="_blank">
                                <i class="fab fa-github mr-2"></i>MDB GitHub
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!--Main Navigation-->

        <!--Main layout-->
        <main class="mt-5 pt-5">
            <div class="container">

                <!--Section: Post-->
                <section class="mt-4">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-8 mb-4">

                            <!--Featured Image-->
                            <div class="card mb-4 wow fadeIn">

                                <img src="{{asset('images/'.$post->featured)}}" class="img-fluid"
                                     alt="">

                            </div>
                            <!--/.Featured Image-->

                            <!--Card-->
                            <div class="card mb-4 wow fadeIn">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <p class="h5 my-4">{{$post->title}}</p>

                                    <div class="row">
                                        <div class="col-md-3"><small>Category :: <a href=""
                                                                                    class="badge badge-secondary">
                                                    {{$post->category->name}}</a> </small></div>
                                        <div class="col-md-3"><small>Tag ::
                                                @foreach($post->tags as $t)
                                                    <a href="" class="badge badge-secondary"> {{$t->name}}</a>
                                                @endforeach
                                            </small></div>
                                        <div class="col-md-3"><small>Author :: <a href="" class="badge badge-secondary">
                                                    Admin</a> </small></div>
                                        <div class="col-md-3"><small>Category :: <a href=""
                                                                                    class="badge badge-secondary">
                                                    {{$post->created_at->diffForHumans()}}</a> </small></div>
                                    </div>
                                    <p class="text-justify">{{$post->content}}</p>
                                    <h5 class="my-4">
                                        <strong>MDB - trusted by 400 000 + developers &amp; designers</strong>
                                    </h5>

                                    <!-- Logo carousel -->

                                    <!-- Logo carousel -->

                                    <hr>

                                    <a class="btn btn-outline-primary"
                                       href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                                       role="button" target="_blank">MDB free download<i
                                            class="fas fa-download ml-2"></i></a>

                                </div>

                            </div>
                            <!--/.Card-->

                            <!--Comments-->
                            <div class="card card-comments mb-3 wow fadeIn">
                               @include('comment')
                            </div>
                            <!--/.Comments-->

                            <!--Reply-->

                            <!--/.Reply-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <!--Card: Jumbotron-->
                            <div class="card blue-gradient mb-4 wow fadeIn">

                                <!-- Content -->
                                <div class="card-body text-white text-center">

                                    <h4 class="mb-4">
                                        <strong>Learn Bootstrap 4 with MDB</strong>
                                    </h4>
                                    <p>
                                        <strong>Best & free guide of responsive web design</strong>
                                    </p>
                                    <p class="mb-4">
                                        <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500
                                            000
                                            users. Video
                                            and written </strong>
                                    </p>
                                    <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/"
                                       class="btn btn-outline-white btn-md">Start
                                        free tutorial
                                        <i class="fas fa-graduation-cap ml-2"></i>
                                    </a>

                                </div>
                                <!-- Content -->
                            </div>
                            <!--Card: Jumbotron-->

                            <!--Card : Dynamic content wrapper-->
                            <div class="card mb-4 text-center wow fadeIn">

                                <div class="card-header">All Tat List</div>

                                <!--Card content-->
                                <div class="card-body">
                                    @foreach($tags as $t)
                                        <a href="{{route('post.tag',$t->slug)}}"
                                           class="badge badge-success m-1">#{{$t->name}}</a>
                                    @endforeach
                                </div>

                            </div>
                            <!--/.Card : Dynamic content wrapper-->

                            <!--Card-->
                            <div class="card mb-4 wow fadeIn">

                                <div class="card-header">Related articles</div>

                                <!--Card content-->
                                <div class="card-body">

                                    <ul class="list-unstyled">
                                        @foreach($relatedPosts as $r)
                                            <li class="media">
                                                <img class="d-flex mr-3"
                                                     src="{{asset('images/'.$r->featured)}}"width="35px"
                                                     alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <a href="">
                                                        <h5 class="mt-0 mb-1 font-weight-bold">{{$r->title}}</h5>
                                                    </a>
                                                    {{substr($r->content,0,50)}}(...)
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Post-->

            </div>
        </main>
        <!--Main layout-->
    </div>



    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
               target="_blank"
               role="button">Download MDB
                <i class="fas fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank"
               role="button">Start
                free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fab fa-google-plus-g mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fab fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fab fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fab fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fab fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

@stop

