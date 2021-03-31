@extends('layouts.product')

@section('css')


@endsection

@section('content')

<!-- Content -->

<main class="top-nav-padding" style="background-color: #f0f0f0;">

    @include('partials.pura-product-navbar')

    {{-- <div class="nav-product-panel">
       <div class="container">
          <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
             <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
          </div>
          <div class="product-nav-collapse">
             <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('pura')}}">Overview PURA</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', ['pura']) }}">Tech Spec</a></li>
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
    <!--------- Submenu ----------->
    <section class="product-liber-banner">
       <div class="responsive-block">
          <a href="https://www.amazon.in/s?k=avita+pura">
             <div class="banner-block responsive-item">
                <div class="banner-bg hidden-sm-down" style="background-image: url('/assets/images/banner/pura_banner_web.jpg')"></div>
                <div class="banner-bg hidden-md-up" style="background-image: url('/assets/images/banner/pura_banner_mobile.jpg')"></div>
                <div class="banner-info">
                   <div class="an-scroll-wrap">
                      <div class="an-scroll">
                         <span></span>
                      </div>
                   </div>
                </div>
             </div>
          </a>
       </div>
    </section>
    <section class="product-liber-computer ls-0" id="test" style="background-color:#fff;">
       <div class="container" style="text-align:center;">
          <div class="space60"></div>
          <div class="banner-para">
             <div align="center" class="col-lg-12" >
                <!---     <div class="h2 banner-header">COMING SOON</div> --->
                <span class="buy-now2"><a href="https://www.flipkart.com/search?q=avita%20pura%20&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=off&as=off">Buy Now</a></span>
             </div>
             <!--
                <br/>


                <form action="https://www.avita-india.com/notify" method="POST" role="form" enctype="multipart/form-data" class="notify-me-form col-12 col-lg-8 col-xl-6 mx-auto">
                <input type="hidden" name="_token" value="9cDrDnQr7cCrpGA4XR1rbjngX98Aw9PJl5LjghUO">
                <div class="row md-4 no-gutters justify-content-center">
                <div class="col-12 col-sm-7 col-md-6 col-lg-7 ml-auto">
                <div class="input-group">
                    <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <input type="email" name="email" class="form-control" required>
                </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4">
                <button class="btn btn-primary d-block mt-3 mt-sm-0 mt-md-0 mx-auto ml-md-3" type="submit">Notify Me</button>
                </div>
                </div>
                </form>

                <div class="banner-para text-center">
                        <span class="d-lg-block">
                                  <span class="buy-now2"><a href="/where-to-buy">Buy Now</a></span>
                        <a href="https://www.nexstmall.com/en_hk/avita.html/cto/avita-pura-laptop?___store=en_hk&utm_source=brandsitepuraproductpage&utm_medium=web&utm_campaign=puraLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#09F">Buy now ></a>&nbsp;&nbsp;
                        <a href="/where-to-buy" style="color:#09F">Where to buy ></a>&nbsp;&nbsp;
                        <a href="#offer" style="color:#09F">Offer </a>

                        </span>
                    </div>
                --->
             <div class="space30"></div>
          </div>
       </div>
    </section>
    <section class="admiror-video" style="background-color:#fff;">
       <div class="banner-block">
          <div class="container">
             <div class="space30"></div>
             <iframe id="ytplayer" type="text/html" width="1110" height="630" src="{{ asset('assets/videos/PURA_clean_version2.mp4?controls=1&rel=0&showinfo=0&autoplay=1&loop=1&mute=1') }}" frameborder="0" allowfullscreen></iframe>
          </div>
       </div>
       <div class="space60"></div>
       <div class="space30"></div>
    </section>
    <section class="product-liber-computer ls-0" id="test" style="background-color:#eee;">
       <div class="container">
          <div class="banner-info">
             <div class="space60"></div>
             <div class="h2 banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">Simplicity at its best</div>
             <div class="banner-para">
                <span class="d-lg-block">The all-new AVITA PURA adopts a minimalistic design</span>
                <span class="d-lg-block">that takes the clutters out of the equation.</span>
             </div>
             <div class="space60"></div>
          </div>
       </div>
    </section>
    <section class="product-liber-wifi ls-0">
       <div class="banner-block">
       <div class="banner-bg"></div>
       <div class="banner-image">
          <img class="bc-computer-image bc-computer-2" src="{{ asset('assets/images/pura/pic_pura01.png') }}">
       </div>
       <div class="container">
          <div class="banner-info ls-0" style="text-align:left">
             <div class="h2 mob-text-center banner-header mb-4 mb-sm-5" style="text-transform:uppercase;">All-new. All-in-one.</div>
             <div class="ac-computer-wrap hidden-md-up">
                <img class="ac-computer-image ac-computer-2" style="" src="{{ asset('assets/images/pura/pic_pura01.png') }}">
             </div>
             <div class="banner-para ls-0">
                <span class="d-lg-block">The all-new AVITA PURA cleverly packs powerful functionalities inside a clean and sleek body design that is like no others. Forget the clumsiness of conventional laptop computers and welcome to a world of new experience!</span>
                <span class="d-lg-block"><a href="https://www.avita-india.com/product/pura/spec" style="color:#09F">Tech Spec ></a></span>
             </div>
             <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center justify-content-sm-between">
                <div class="data-card my-3 text-left">
                   <div class="badge-caption">Operating System</div>
                   <div class="badge-value">Windows 10 in S Mode</div>
                   <div class="badge-caption"><a href="https://support.microsoft.com/en-in/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">Know more ></a></div>
                </div>
                <div class="data-card my-3 text-left">
                   <div class="badge-caption">Up to</div>
                   <div class="badge-value">8<span class="badge-caption pl-1">GB</span></div>
                   <div class="badge-caption">RAM</div>
                </div>
                <div class="data-card my-3 text-left">
                   <div class="badge-caption">Up to</div>
                   <div class="badge-value">512<span class="badge-caption pl-1">GB</span></div>
                   <div class="badge-caption">SSD</div>
                </div>
                <div class="data-card my-3 text-left">
                   <div class="badge-value">Intel<sup>&reg;</sup> | AMD</div>
                   <div class="badge-caption">CORE<sup>&trade;</sup> i3-8145U / i5-8265U | AMD A9-9420E / R3-3200U / R5-3500U </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section>
       <div class="banner-block ls-0">
          <div class="banner-bg hidden-sm-down" style="background:url(/assets/images/pura/pura_bg3.jpg) top center no-repeat;"></div>
          <div class="banner-bg hidden-md-up" style="background-color:#fff;"></div>
          <div class="container">
             <div class="space60 hidden-sm-down"></div>
             <div class="space60 hidden-sm-down"></div>
             <div class="row">
                <div class="col-12 col-lg-6" align="left"></div>
                <div class="col-12 col-lg-6" align="left">
                   <div class="h2 banner-header mob-text-center">
                      <div class="d-sm-inline" style="text-transform:uppercase;">Light as a feather</div>
                   </div>
                   <div class="space60"></div>
                   <div class="ac-computer-wrap hidden-md-up">
                      <img class="ac-computer-image ac-computer-2" style="" src="{{ asset('assets/images/pura/pic_pura02.png') }}">
                   </div>
                   <div class="banner-para ls-0">
                      The 14-inch AVITA PURA embraces a super slim outfit and weighs from a mere 1.21 kg, offering you unparalleled portability and ease of use.</span>
                   </div>
                   <section class="product-liber-wifi">
                      <div class="banner-data d-flex flex-column flex-sm-row flex-wrap">
                         <div class="data-card mx-3 text-left">
                            <span class="badge-value">5</span>
                            <span class="badge-caption">mm</span>
                            <div class="badge-caption">Thinnest part</div>
                         </div>
                         <span class="badge-caption text-right">starting<br/>from</span>
                         <div class="data-card mx-3 text-left">
                            <span class="badge-value">1.21 </span>
                            <span class="badge-caption">kg</span>
                            <div class="badge-caption">14-inch weight</div>
                         </div>
                      </div>
                   </section>
                </div>
             </div>
             <div class="space60 hidden-sm-down"></div>
             <div class="space60 hidden-sm-down"></div>
             <div class="space60"></div>
          </div>
       </div>
    </section>
    <section>
       <div class="banner-block" >
          <div class="banner-bg hidden-sm-down" style="background:url(/assets/images/pura/pura_bg2.jpg) top center no-repeat;"></div>
          <div class="container">
             <div class="space60 hidden-sm-down"></div>
             <div class="space60"></div>
             <div class="row">
                <div class="col-12 col-lg-6" align="left">
                   <div class="h2 banner-header mob-text-center">
                      <div class="d-sm-inline" style="text-transform:uppercase;">Always at your service</div>
                   </div>
                   <div class="ac-computer-wrap hidden-sm-up">
                      <img class="ac-computer-image ac-computer-2" style="" src="{{ asset('assets/images/pura/pura_bg2_mob.jpg') }}">
                   </div>
                   <div class="space60 hidden-sm-down"></div>
                   <div class="banner-para ls-0">
                      No more agonising wait for the laptop to power up! The AVITA PURA is the perfect example of modern computing and could turn on in as soon as 20 seconds, so you can hop on anytime to flex your creativity - in a lightning fast manner. Thanks to the extended battery life that lasts up to 10 hours*, the AVITA PURA is the perfect companion to have your work and life seamlessly combined.<br />
                      <br />
                      The AVITA PURA is pre-installed with the Windows 10 Home Edition operating system (in S mode), along with the 8th-generation Intel® Core™ i3-8145U or i5-8265U processor, up to 8GB RAM, 512GB SSD hard disk and various ports to meet your everyday needs.</span>
                   </div>
                </div>
             </div>
             <div class="space60 hidden-sm-down"></div>
             <div class="space60"></div>
          </div>
       </div>
    </section>
    <section style="background-color:#fff;">
       <div class="container">
          <div class="space60"></div>
          <div class="row">
             <div class="col-12 col-lg-2">
             </div>
             <div class="col-12 col-lg-8" align="center">
                <div class="h2 banner-header">
                   <div class="d-sm-inline" style="text-transform:uppercase;">Exemplary experience</div>
                </div>
                <div>
                   <img class="Fadein-up" src="{{ asset('assets/images/pura/pic_pura03.png') }}">
                </div>
                <div class="space60"></div>
                <div class="banner-para ls-0">
                   <span class="d-lg-block">Every piece of detail on the AVITA PURA has been carefully thought through to ensure the best possible experience for you. While the re-engineered keyboard could enhance your work efficiency, the non-slip cover effectively reduces the risks of falling or impact to the device.</span>
                </div>
             </div>
          </div>
          <div class="space60 hidden-sm-down"></div>
       </div>
    </section>
    <!--- SIMPLY PERFECT--------->
    <section style="background-color:#fff;">
       <div class="container">
          <div class="space60"></div>
          <div class="row">
             <div class="col-12 col-lg-2">
             </div>
             <div class="col-12 col-lg-8" align="center">
                <div class="h2 banner-header">
                   <div class="d-sm-inline" style="text-transform:uppercase;">SIMPLY PERFECT</div>
                </div>
                <div class="banner-para ls-0 py-3">
                   <span class="d-lg-block">Pre-installed Windows 10 (S Mode). Windows 10 in S mode is a version of Windows 10 that's streamlined for the best performance, while providing a fast startup and long life battery. To increase security, it allows apps from the Microsoft Store, and requires Microsoft Edge for safe browsing. It's available to switch from S mode to Windows 10 as your preference.　
                   </span>
                   <span class="d-lg-block  py-3">
                   <a href="https://support.microsoft.com/en-in/help/4020089/windows-10-in-s-mode-faq" style="color:#09F" target="_blank">How to switch to Windows 10 Home Edition for free　></a>
                   </span>
                   <span class="d-lg-block  mb-3">
                   <small>
                   *Switch out of S mode is an one-way action. You will not be able to revert to the S mode.
                   </small>
                   </span>
                </div>
             </div>
          </div>
          <div class="space60 hidden-sm-down"></div>
       </div>
    </section>
    <!--- Show your color--------->
    <section style="background-color:#fff;" id="offer">
       <div class="container">
          <div class="space60"></div>
          <div class="row">
             <div class="col-12 col-lg-2">
             </div>
             <div class="col-12 col-lg-8  Fadein" align="center">
                <div class="h2 banner-header">
                   <div class="d-sm-inline" style="text-transform:uppercase;">Show your colours</div>
                </div>
                <div class="space60"></div>
                <div class="banner-para ls-0">
                   <span class="d-lg-block mx-3">The AVITA PURA comes with a complimentary notebook 3-in-1 computer sleeve that can be used as a handy carrying case or a stylish carrying bag for your personal belongings. What's more, the soft and slouchy premium sleeve sports a choice of six colours, grey, green, orange, blue, black and purple, to suit your style. </span>
                   <span class="d-lg-block  mx-3">
                   <small>*The 3-in-1 sleeve is only available during the promotional period and while stocks last.</small></span>
                </div>
             </div>
          </div>
          <div class="space60 hidden-sm-down"></div>
       </div>
    </section>
    <!--
       <section>
       <div class="banner-block" >
       <div class="banner-bg hidden-sm-down" style="background:url(/assets/images/pura/pura_bg4.jpg) top center no-repeat;"></div>
           <div class="container">
               <div class="space60 hidden-sm-down"></div>
               <div class="space60"></div>

               <div class="row">
                   <div class="col-12 col-lg-6"></div>

                   <div class="col-12 col-lg-6" align="left">
                       <div class="h2 banner-header mob-text-center"><div class="d-sm-inline mx-3" style="text-transform:uppercase;">Show your colours</div></div>
                       <div class="ac-computer-wrap hidden-sm-up">
                           <img class="ac-computer-image ac-computer-2" style="" src="{{ asset('assets/images/pura/pura_bg4_mob.jpg') }}">
                       </div>
                   <div class="space30 hidden-sm-down"></div>
                       <div class="banner-para ls-0">
       <span class="d-lg-block mx-3">The AVITA PURA comes with a complimentary notebook 3-in-1 computer sleeve that can be used as a handy carrying case or a stylish carrying bag for your personal belongings. What's more, the soft and slouchy premium sleeve sports a choice of six colours, grey, green, orange, blue, black and purple, to suit your style. </span>
                        <span class="d-lg-block  mx-3">
                       <small>*The 3-in-1 sleeve is only available during the promotional period and while stocks last.</small></span>
                       </div>
                       <div class="space30 hidden-sm-down"></div>
                       <div>
                           <img class="ac-computer-image ac-computer-2 mx-3 hidden-sm-down" style="" src="{{ asset('assets/images/pura/pura_bg4_mob.jpg') }}">
                       </div>
                   </div>
               </div>
               <div class="space60 hidden-sm-down"></div>
           </div>
       </div>
       </section>
       -->
    <section style="background-color:#fff;">
       <div class="container">
          <div class="space60"></div>
          <div class="row">
             <div class="col-12 col-lg-12  Fadein" align="center">
                <div class="ac-computer-wrap">
                   <img class="ac-computer-image ac-computer-2" src="{{ asset('assets/images/pura/bag_color.png') }}">
                </div>
                <section class="product-liber-wifi">
                   <div class="banner-data d-flex flex-column flex-sm-row flex-wrap justify-content-center">
                      <!--   <div class="banner-para text-center">
                         <span class="d-lg-block">
                             <a href="https://www.nexstmall.com/en_hk/avita.html/cto/avita-pura-laptop?___store=en_hk&utm_source=brandsitepuraproductpage&utm_medium=web&utm_campaign=puraLaunchPhase1&utm_content=overviewpage" target="_blank" style="color:#09F">Buy now</a>&nbsp;&nbsp;
                             <a href="/where-to-buy" style="color:#09F">Where to buy ></a>
                         </span>
                         </div>

                         --->
                   </div>
                </section>
             </div>
          </div>
          <div class="space60"></div>
       </div>
    </section>
    <!----Color Options--------------->
    <section class="product-statement">
       <div class="container">
          <ul class="product-statement-list py-2 py-sm-5 mx-auto ls-0 pl-4 py-0 mt-0 mt-sm-5">
             <li>Windows 10 Home in S mode works exclusively with apps from the Microsoft Store within Windows and accessories that are compatible with Windows 10 Home in S mode. A one-way switch out of S mode is available. Learn more at <a href="https://Windows.com/SmodeFAQ" target="_blank"><u>Windows.com/SmodeFAQ</u></a>. </li>
             <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
             <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
             <li>Weights vary depending on configuration and manufacturing variability.</li>
             <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
             <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
             <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
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
