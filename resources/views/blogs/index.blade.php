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
                <div class="col-sm-6 col-md-6">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-thumbnail" src="{{ asset('blog\AVITA-breaks-down-the-Most-Creative-Career-Choices-students-make-today.png') }}" width="600" height="400" alt="" >
                        </div>
                        <h2 class="post-title">
                            <a href="blog-single.html">Sample Blog Post</a>
                        </h2>
                        <div class="post-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <div class="post-meta">
                        <!-- Author  -->
                        <span class="author">
                        <i class="fa fa-user"></i> John Deo</span>
                        <!-- Meta Date -->

                        <span class="time">
                        <i class="fa fa-calendar"></i> 03.11.2014</span>
                        <!-- Category -->

                        <span class="category pull-right">
                        <i class="fa fa-heart"></i> Travel, Nature, Business</span></div>
                    </div>
                </div>
                <!-- post -->
                <div class="col-sm-6 col-md-6">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-thumbnail" src="{{ asset('blog\Avita-Liber-Technology-to-keep-YOU-high-on-Fashion.png') }}" width="600" height="400" alt="" title="" />
                        </div>
                        <h2 class="post-title">
                            <a href="blog-single.html">Sample Blog Post</a>
                        </h2>
                        <div class="post-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <div class="post-meta">
                        <!-- Author  -->
                        <span class="author">
                        <i class="fa fa-user"></i> John Deo</span>
                        <!-- Meta Date -->

                        <span class="time">
                        <i class="fa fa-calendar"></i> 03.11.2014</span>
                        <!-- Category -->

                        <span class="category pull-right">
                        <i class="fa fa-heart"></i> Travel, Nature, Business</span></div>
                    </div>
                </div>
                <!-- post -->

                <div class="col-sm-6 col-md-6">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-thumbnail" src="{{ asset('blog\AVITA-Magus–8-Wonderful-Benefits-of-a-2-in-1-Laptops.png') }}" width="600" height="400" alt="" >
                        </div>
                        <h2 class="post-title">
                            <a href="blog-single.html">Sample Blog Post</a>
                        </h2>
                        <div class="post-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <div class="post-meta">
                        <!-- Author  -->
                        <span class="author">
                        <i class="fa fa-user"></i> John Deo</span>
                        <!-- Meta Date -->

                        <span class="time">
                        <i class="fa fa-calendar"></i> 03.11.2014</span>
                        <!-- Category -->

                        <span class="category pull-right">
                        <i class="fa fa-heart"></i> Travel, Nature, Business</span></div>
                    </div>
                </div>
                <!-- post -->
                <div class="col-sm-6 col-md-6">
                    <div class="post-item">
                        <div class="post-image">
                            <img class="img-thumbnail" src="{{ asset('blog\AVITAs-Guide-to-Buying-the-Perfect-Student-Laptop.png') }}" width="600" height="400" alt="" title="" />
                        </div>
                        <h2 class="post-title">
                            <a href="blog-single.html">Sample Blog Post</a>
                        </h2>
                        <div class="post-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <div class="post-meta">
                        <!-- Author  -->
                        <span class="author">
                        <i class="fa fa-user"></i> John Deo</span>
                        <!-- Meta Date -->

                        <span class="time">
                        <i class="fa fa-calendar"></i> 03.11.2014</span>
                        <!-- Category -->

                        <span class="category pull-right">
                        <i class="fa fa-heart"></i> Travel, Nature, Business</span></div>
                    </div>
                </div>
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
</main>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('assets/js/blogjquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/blogcustom.js') }}"></script>

@endsection

