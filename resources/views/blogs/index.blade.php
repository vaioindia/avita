@extends('layouts.parent')

@section('css')

<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}

<!-- Optional theme -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"> --}}

<!-- Latest compiled and minified JavaScript -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}"> --}}

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/blog.css')}}">
@endsection

@section('content')

<main class="top-nav-padding" style="background-color: #f0f0f0;">

    {{-- <section class="page-section"> --}}
        <div class="container pt-4">
            <h3 class="section-title ls-0 my-5">Blogs</h3>
            <div class="row">
            </div>
            <div class="row">

            </div>
            <div class="row" >
                @foreach($blogs as $blog)
                <div class="col-sm-6 col-md-6">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-thumbnail" src="{{ URL::to('/') }}/images/blog/{{ $blog->image }}" width="600" height="400" alt="{{ $blog->image }}" >
                        </div>
                        <h2 class="post-title">
                            <a href="blog-single.html">{{ $blog->title }}</a>
                        </h2>
                        <div class="post-content">{{ $blog->short_desc }}</div>
                        <div class="post-meta">
                        <!-- Author  -->
                        <span class="author">
                        <i class="fa fa-user"></i> Published</span>
                        <!-- Meta Date -->

                        <span class="time pull-right">
                        <i class="fa fa-calendar"></i>{{ $blog->published_at }}</span>
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
    {{-- </section> --}}
</main>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('assets/js/blogjquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/blogcustom.js') }}"></script>

@endsection

