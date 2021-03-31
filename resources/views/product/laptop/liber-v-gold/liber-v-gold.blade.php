@extends('layouts.product')

@section('css')


@endsection

@section('content')

<!-- Content -->

<main class="top-nav-padding" style="background-color: #f0f0f0;">

    @include('partials.liber-v-gold-product-navbar')

   {{-- <div class="nav-product-panel">
      <div class="container">
         <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
         </div>
         <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('liber-v-gold')}}">Overview liber-v-gold</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', ['liber-v-gold']) }}">Tech Spec</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="https://www.avita-india.com/product/liber/support">Support</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('wheretobuy')}}">Where to buy</a></li>
            </ul>
         </div>
      </div>
   </div> --}}

   <div class="product-fix-menu-2">
      <div class="menu-item">
         <a href="https://www.flipkart.com/avita-liber-core-i7-10th-gen-16-gb-1-tb-ssd-windows-10-home-ns14a8inr671-pag-thin-light-laptop/p/itmbe8a49652ca6f" target="_blank"><small>BUY <br/>NOW</small></a>
      </div>
   </div>
   <!----
      <div class="product-fix-menu-3">


              <div class="menu-item">

               <a  href="https://www.avita-india.com/product/liber-v-gold-black"><small>Midnight <br/>Black </small></a>


             </div>

      </div>

      ---->
   <section class="product-liber-banner">
      <div class="responsive-block">
         <div class="banner-block responsive-item">
            <div class="banner-bg hidden-sm-down" style="background-image: url('/assets/images/liber-v-gold/AVITA_liber_v_gold_banner_web.gif')"></div>
            <div class="banner-bg hidden-md-up" style="background-image: url('/assets/images/liber-v-gold/AVITA_liber_v_gold_banner_mob.gif')"></div>
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

   <section class="product-liber-computer product-liber-v-gold-display">
      <div class="banner-block">
         <div class="banner-bg" id="banner-bg"></div>
         <img class="bc-computer-image bc-computer-2" src="{{ asset('assets/images/liber-v-gold/icons-text.png') }}">
      </div>
      <div class="banner-image">
         <img class="bc-computer-image bc-computer-4" src="{{ asset('assets/images/liber-v-gold/LiberV_14colors_hk_en2.png') }}">
      </div>
   </section>

   <!-- <section class="product-liber-computer product-liber-v-gold-ssd">
      <div class="dynamic-performance-banner">
         <img class="dynamic-performance-image dynamic-performance-laptop" src="{{ asset('assets/images/liber-v-gold/dynamic-performance-laptop.png')}}">
         <img class="dynamic-performance-image dynamic-performance-screen screen1" src="{{ asset('assets/images/liber-v-gold/screen-1.png') }}">
         <img class="dynamic-performance-image dynamic-performance-screen screen2" src="{{ asset('assets/images/liber-v-gold/screen-2.png') }}">
      </div>
      <div class="banner-block">
         <div class="banner-bg"></div>
         <img class="bc-computer-image bc-computer-6" src="{{ asset('assets/images/liber-v-gold/dynamic-performance.png') }}">
      </div>
   </section> -->

   <section class="product-liber-computer product-liber-v-gold-light">
      <div class="light-weight-banner">
         <img class="light-weight-image light-weight-text" src="{{ asset('assets/images/liber-v-gold/thin&light_text.png') }}">
      </div>
      <div class="banner-block">
         <div class="banner-bg"></div>
         <img class="bc-computer-image light-weight-thin" src="{{ asset('assets/images/liber-v-gold/thin.png') }}">
         <img class="bc-computer-image light-weight-light" src="{{ asset('assets/images/liber-v-gold/light.png') }}">
      </div>
   </section>

   <section class="product-liber-computer product-liber-v-gold-keyboard">
      <div class="keyboard-fingerprint-banner">
         <img class="keyboard-fingerprint-image keyboard-fingerprint-light" src="{{ asset('assets/images/liber-v-gold/keyboard_fingerprint_lighting.png') }}">
         <img class="keyboard-fingerprint-image keyboard-fingerprint-laptop1" src="{{ asset('assets/images/liber-v-gold/keyboard_fingerprint_laptop1.png') }}">
         <img class="keyboard-fingerprint-image keyboard-fingerprint-laptop2" src="{{ asset('assets/images/liber-v-gold/keyboard_fingerprint_laptop2.png') }}">
      </div>
      <div class="banner-block">
         <div class="banner-bg"></div>
         <img class="bc-computer-image keyboard-fingerprint-text" src="{{ asset('assets/images/liber-v-gold/keyboard_fingerprint_text.png') }}">
      </div>
      </div>
      </div>
   </section>
   <section class="product-liber-computer product-liber-v-gold-battery">
      <div class="battery-life-banner">
         <img class="battery-life-image light-weight-text" src="{{ asset('assets/images/liber-v-gold/battery_life_text.png') }}">
      </div>
      <div class="banner-block">
         <div class="banner-bg"></div>
         <img class="bc-computer-image battery-life-laptop" src="{{ asset('assets/images/liber-v-gold/battery_life_laptop.png') }}">
      </div>
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
            <li>color options are subject to product availability.</li>
         </ul>
      </div>
   </section>
   <div class="color-opt">
      <button class="btn-opt"></button>
      <div class="slide-text"><a href="https://www.avita-india.com/product/liber-v-gold-blue">Royal Blue</a></div>
   </div>
   <div class="gotop-wrap">
      <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
   </div>
</main>

<!-- ./Content -->

@endsection

@section('scripts')

@endsection
