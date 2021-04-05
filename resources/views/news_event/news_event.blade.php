
@extends('layouts.parent')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/blog.css')}}">
@endsection

@section('content')

<main class="top-nav-padding" style="background-color: #f0f0f0;">
        {{-- News --}}
    {{-- <section class="page-section"> --}}
        <div class="container pt-4">
            <h3 class="section-title ls-0 my-5">News</h3>
            <div class="row">
            </div>
            <div class="row">

            </div>
            <div class="row" >
                @foreach ($whatnews as $whatnew)
                <div class="col-sm-6 col-md-6">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-thumbnail" src="{{ URL::to('/') }}/images/news/{{ $whatnew->image }}" width="600" height="400" alt="{{ $whatnew->image }}" >
                        </div>
                        <h2 class="post-title">
                            <a href="{{ $whatnew->url }}">{{ $whatnew->title }}</a>
                        </h2>
                        {{-- <div class="post-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> --}}
                        <div class="post-meta">
                        <!-- Author  -->
                        <span class="author">
                        <i class="fa fa-user"></i> {{ $whatnew->published }}</span>
                        <!-- Meta Date -->
                        <span class="time pull-right">
                        <i class="fa fa-calendar"></i> {{ $whatnew->published_at }}</span></div>
                    </div>
                </div>
                @endforeach
                <!-- post -->

            </div>


            <div class="row">
                {{-- <div class="col-md-12">
                    <nav class="navbar-right">
                        <ul class="pagination">
                            <li class="disabled">
                                <span>
                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                </span>
                            </li>
                            <li class="active">
                                <span>1
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                <span>2
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                <span>3
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                <span>4
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li>
                                <span>
                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                </span>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
            <!-- pagination -->
        </div>

    {{-- </section> --}}


        {{-- Events --}}
        <div class="container pt-4">
            <h3 class="section-title ls-0 my-5">Events</h3>
            <div class="row">
            </div>
            <div class="row">

            </div>
            <div class="row" >
                @foreach ($events as $event)
                <div class="col-sm-6 col-md-6">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-thumbnail" src="{{ URL::to('/') }}/images/events/{{ $event->image }}" width="600" height="400" alt="{{ $event->image }}" >
                        </div>
                        <h2 class="post-title">
                            <a href="blog-single.html">{{ $event->title }}</a>
                        </h2>
                        <div class="post-content">{{ $event->desc }}</div>
                        <div class="post-meta">
                        <!-- Author  -->
                        {{-- <span class="author">
                        <i class="fa fa-user"></i> John Deo</span> --}}
                        <!-- Meta Date -->

                        <span class="time">
                        <i class="fa fa-calendar"></i> {{ $event->published_at }}</span>
                        <!-- Category -->

                        {{-- <span class="category pull-right">
                        <i class="fa fa-heart"></i> Travel, Nature, Business</span></div> --}}
                    </div>
                </div>
                <!-- post -->
            </div>
            @endforeach


            <div class="row">
                {{-- <div class="col-md-12">
                    <nav class="navbar-right">
                        <ul class="pagination">
                            <li class="disabled">
                                <span>
                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                </span>
                            </li>
                            <li class="active">
                                <span>1
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                <span>2
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                <span>3
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="">
                                <span>4
                                <span class="sr-only">(current)</span></span>
                            </li>
                            <li>
                                <span>
                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                </span>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
            <!-- pagination -->
        </div>
</main>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/blogjquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/blogcustom.js') }}"></script>
@endsection
