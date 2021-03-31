@extends('layouts.product')

@section('css')


@endsection

@section('content')

<!-- Content -->

<main class="top-nav-padding" style="background-color: #f0f0f0;">

    @include('partials.magus-product-navbar')

    <!-------------------Submenu------------->
    {{-- <div class="nav-product-panel">
       <div class="container">
          <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
             <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
          </div>
          <div class="product-nav-collapse">
             <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('magus')}}">MAGUS Lite</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', ['magus']) }}">Tech Spec</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="https://www.avita-india.com/product/liber/support">Support</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('wheretobuy')}}">Where to buy</a></li>
             </ul>
          </div>
       </div>
    </div> --}}


    <div class="product-fix-menu">
       <div class="menu-item">
          <a href="https://in.nexstmall.com/" target="_blank">BUY<br><small>NOW</small></a>
       </div>
       <div class="menu-item">
          <a href="https://avita-india.com/where-to-buy">Where<br><small>to buy</small></a>
       </div>
    </div>
    <!--------------->
    <section class="product-liber-banner">
       <div class="responsive-block">
          <div class="banner-block responsive-item" >
             <div class="banner-bg hidden-sm-down" style="background-image: url('/assets/images/banner/MAGUS-WEB-BANNER.jpg')"></div>
             <div class="banner-bg hidden-md-up" style="background-image: url('/assets/images/banner/MAGUS-MOB-BANNER.jpg')"></div>
             <div class="banner-info">
                <div class="btn-group mt-3">
                </div>
                <div class="an-scroll-wrap">
                   <div class="an-scroll">
                      <span></span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="product-liber-port ls-0">
       <div class="banner-block">
          <div class="banner-bg"> </div>
          <div class="banner-image">
             <img class="bc-computer-image bc-computer-1" src="{{ asset('assets/images/magus/sc2_img1.png') }}">
             <!--<img class="bc-computer-image bc-computer-2" src="assets/images/liber/sc7_fimg2.png">
                <img class="bc-computer-image bc-computer-3" src="assets/images/liber/sc7_fimg3.png">-->
          </div>
          <div class="container">
             <div class="banner-info mx-auto mr-lg-0">
                <div class="ac-computer-wrap hidden-md-up">
                   <img class="ac-computer-image ac-computer-1" src="{{ asset('assets/images/magus/sc2_img1.png') }}">
                </div>
                <div class="h2 banner-header mb-4 mb-sm-5">2-in-1 detachable design</div>
                <div class="banner-para ls-0">
                   <span class="d-lg-block">MAGUS is both a recreational gadget and the best partner in the office. The 2-in-1 comes vivid color line-up with a 12.2” 1920x1200 IPS touch screen that offers ultra-wide viewing angle.  With a keyboard cover, the MAGUS 12.2&quot; 2-in-1 transforms from a tablet into a laptop by simply opening the built-in stand, enabling users to stay productive with ease anytime, anywhere.</span><span class="d-lg-block"></span>
                   <p class="d-lg-block"><img src="{{ asset('assets/images/magus/feature.png') }}"></p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="product-liber-performance ls-0">
       <div >
          <div class="hidden-xs-down" style="background-color: #f0f0f0;"><img src="{{ asset('assets/images/magus/sc1_bg.png') }}"></div>
          <div class="ac-computer-wrap hidden-md-up">
             <img class="ac-computer-image ac-computer-1" style="" src="{{ asset('assets/images/magus/sc3_fimg2.png') }}">
          </div>
          <div class="container">
             <div class="banner-info">
                <div class="h2 banner-header mb-4 mb-sm-5">Inside-out Vibrancy</div>
                <div class="banner-para">
                   <span class="d-lg-block">MAGUS combines minimalistic design with a metallic casing. Be it in tablet form or laptop mode, MAGUS allows users to express their personal styles with the four color options available – Seashell Pink, Steel Blue, Charcoal Grey, and Pastel Violet.</span>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="product-liber-port ls-0">
       <div class="banner-block">
          <div class="banner-bg"></div>
          <div class="banner-image">
             <img class="bc-computer-image bc-computer-1" src="{{ asset('assets/images/magus/sc7_fimg1.png') }}">
             <!--<img class="bc-computer-image bc-computer-2" src="assets/images/liber/sc7_fimg2.png">
                <img class="bc-computer-image bc-computer-3" src="assets/images/liber/sc7_fimg3.png">-->
          </div>
          <div class="container">
             <div class="banner-info mx-auto mr-lg-0">
                <div class="ac-computer-wrap hidden-md-up">
                   <img class="ac-computer-image ac-computer-1" src="{{ asset('assets/images/magus/sc7_fimg1.png') }}">
                </div>
                <div class="h2 banner-header mb-4 mb-sm-5">Accommodate daily work and entertainment needs</div>
                <div class="banner-para ls-0">
                   <p class="d-lg-block">MAGUS can run a variety of Windows applications with battery life up to eight hours*. It has a microSDXC card reader built in, equipped with a 3.5mm audio jack, a mini HDMI port and a USB 3.0 interface, taking care of the users' needs in every way possible. </p>
                   <!--p class="d-lg-block"><img src="assets/images/magus/sideview.png"></p-->
                   <p class="d-lg-block"><img src="{{ asset('assets/images/magus/port_en.png') }}"></p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section style="background-color:#f0f0f0">
       <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
          <iframe src="https://www.youtube.com/embed/wHXTmPKLpGw"
             frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-pictur" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
       </div>
    </section>
    <div class="container">
       <div class="row">
          <img class="ac-computer-image ac-computer-1" src="{{ asset('assets/images/magus/magus_warranty.png') }}">
       </div>
    </div>
    </section>
    <section class="product-statement">
       <div class="container">
          <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
             <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
             <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
             <li>Weights vary depending on configuration and manufacturing variability.</li>
             <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
             <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
             <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
             <li>Battery life will vary depending on various factors including product model, configuration, loaded applications, features, use, wireless functionality, and power management settings. The maximum capacity of the battery will naturally decrease with time and usage.</li>
             <li>*Under Test Conditions</li>
          </ul>
       </div>
    </section>
    <div class="gotop-wrap">
       <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>
 </main>

<!-- ./Content -->

@endsection

@section('scripts')

@endsection
