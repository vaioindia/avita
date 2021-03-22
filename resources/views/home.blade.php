@extends('layouts.app')

@section('content')
<!-- Banner Section -->
<section class="top-nav-padding homepage-banner">
    <div id="home_banner" class="carousel slide" data-ride="carousel" data-interval="0" data-pause="">
       <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
             <div class="responsive-block">
                <a href="#">
                   <div class="banner-block responsive-item">
                      <div class="banner-bg hidden-sm-down banner-web-liber-v">
                        <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/avita-liber-v-web-new-v1.jpg')"></a>
                      </div>
                      <div class="banner-bg hidden-md-up banner-mob-liber-v">
                        <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/avita-liber-v-mob-new-v1.jpg')"></a>
                      </div>
                   </div>
                </a>
             </div>
          </div>
          <div class="carousel-item">
             <div class="responsive-block">
                <a href="#">
                   <div class="banner-block responsive-item">
                      <div class="banner-bg hidden-sm-down banner-web-essential">
                        <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/avita-essential-web-new.jpg')"></a>
                      </div>
                      <div class="banner-bg hidden-md-up banner-mob-essential">
                         <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/avita-essential-mob-new.jpg')"></a>
                      </div>
                   </div>
                </a>
             </div>
          </div>
          <div class="carousel-item">
             <div class="responsive-block">
                <a href="#">
                   <div class="banner-block responsive-item">
                      <div class="banner-bg hidden-sm-down banner-web-admiror">
                         <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/avita-admiror-web-new.jpg')"></a>
                      </div>
                      <div class="banner-bg hidden-md-up banner-mob-admiror">
                         <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/avita-admiror-mob-new.jpg')"></a>
                      </div>
                   </div>
             </div>
          </div>
          <div class="carousel-item">
          <div class="responsive-block">
          <a href="#">
          <div class="banner-block responsive-item">
          <div class="banner-bg hidden-sm-down banner-web-warranty">
             <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/warranty_banner1_web.jpg')"></a>
          </div>
          <div class="banner-bg hidden-md-up banner-mob-warranty">
             <a class="banner-bg" href="#" style="background-image: url('assets/images/banner/warranty_banner1_mob.jpg')"></a>
          </div>
          </div>
          </a>
          </div>
          </div>
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
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="#" style="background-image: url('assets/images/demo/promo-01-en.jpg')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="#" style="background-image: url('assets/images/campus.jpg')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="#" style="background-image: url('assets/images/demo/promo-03-en.jpg')"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="banner-block s-banner">
                    <div class="banner-inner">
                        <div class="banner-wrap">
                            <a class="banner-bg" href="#" style="background-image: url('assets/images/demo/promo-04-en.jpg')"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </section>
<!-- card section -->
@endsection
