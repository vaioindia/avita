@extends('layouts.app')

@section('content')
<!-- Banner Section -->
<section class="top-nav-padding homepage-banner">
    <div  id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
       <div class="carousel-inner" role="listbox">
        @foreach($banners as $banner)
          <div class="carousel-item {{$banner->status == 'enabled' ? 'active' : '' }}">
             <div class="responsive-block">
                <div class="banner-block responsive-item">
                    <div class="banner-bg hidden-sm-down banner-web-liber-v">
                        <a class="banner-bg" href="{{ $banner->url }}">
                            <img src="{{ URL::to('/') }}/images/banner/{{ $banner->web_image }}" class="w-100 h-100" src="{{ $banner->title }}"/>
                        </a>
                    </div>
                    <div class="banner-bg hidden-md-up banner-mob-liber-v">
                        <a class="banner-bg" href="{{ $banner->url }}">
                            <img src="{{ URL::to('/') }}/images/banner/{{ $banner->mob_image }}" class="w-100 h-100" src="{{ $banner->title }}"/>
                        </a>
                    </div>
                </div>
             </div>
          </div>
          @endforeach
          <ol class="carousel-indicators">
             <li data-target="#home_banner" data-slide-to="0" class="active"></li>
             <li data-target="#home_banner" data-slide-to="1"></li>
             <li data-target="#home_banner" data-slide-to="2"></li>
             <li data-target="#home_banner" data-slide-to="3"></li>
          </ol>
       </div>
    </div>
 </section>
<!-- Banner Section -->

<!-- Card Section -->
<section class="promo-banner mt-1">
    <div id="preloaders" class="preloader"></div>

            <div class="row no-gutters">
            @foreach ($grids as $grid)
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="banner-block s-banner">
                        <div class="banner-inner">
                            <div class="banner-wrap">
                                <a class="banner-bg" href="{{ $grid->url }}">
                                    <img src="{{ URL::to('/') }}/images/grid/{{ $grid->image }}" class="w-100 h-100"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
 </section>
<!-- card section -->

<!-- newsletter subscription  -->
@include('partials.newsletter')
<!-- newsletter subscription  -->

@endsection


@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.carousel').carousel({
        interval: 3000
        });
    });

</script>
@endsection
