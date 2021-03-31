@extends('layouts.product')

@section('css')
<style>
    /* * {
      box-sizing: border-box;
    }
    */
    .zoom {
      padding: 10px;
      /* background-color: green; */
      transition: transform .2s;
      width: 300px;
      height: 200px;
      margin: 0 auto;
    }

    .zoom:hover {
      -ms-transform: scale(1.5); /* IE 9 */
      -webkit-transform: scale(1.5); /* Safari 3-8 */
      transform: scale(2.5);
    }
</style>
@endsection

@section('content')

<!-- Content -->
<main class="top-nav-padding" style="background-color: #f0f0f0;">

    @include('partials.admiror-product-navbar')

    {{-- <div class="nav-product-panel">
       <div class="container">
          <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
             <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
          </div>
          <div class="product-nav-collapse">
             <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('admiror')}}">Overview ADMIROR</a></li>
                <li class="nav-item"><a class="nav-link py-1" href="{{ route('product.spec', ['admiror']) }}">Tech Spec</a></li>
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
    <!-------------------Submenu----------
       <div class="nav-product-panel">
           <div class="container">
               <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
                   <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
               </div>

               <div class="product-nav-collapse">
                   <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end my-2">


                        <li class="nav-item"><a class="nav-link py-1" href="https://www.avita-india.com/product/admiror">admiror.name</a></li>

                       <li class="nav-item"><a class="nav-link py-1" href="https://www.avita-india.com/product/admiror/spec">Tech Spec</a></li>
                       <li class="nav-item"><a class="nav-link py-1" href="https://www.avita-india.com/product/liber/support">Support</a></li>


                       <li class="nav-item" style="display:none;"><a class="nav-link py-1" href="https://www.avita-india.com/product/admiror/support">Support</a></li>

                       <li class="nav-item">
                           <a class="nav-link py-1" href="/where-to-buy">Where to buy</a>
                       </li>

                       <li class="nav-item" style="display:none;">
                           <a class="nav-link py-1" href="/where-to-buy">Where to buy</a>
                       </li>

                   </ul>
               </div>
           </div>
       </div>
       ---->
    <section>
       <!--------------PRODUCT IMAGES-------------->
       <div class="nav-product-wrap">
          <div class="container px-0">
             <nav class="nav nav-pills nav-product-spec justify-content-center">
                <!------------- AVITA ADMIROR (14-inch) -------------->
                <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                   <div class="spec-item-name mb-4">
                      <div class="d-sm-block">AVITA ADMIROR</div>
                      <div class="d-sm-block">(35.56 cm)</div>
                   </div>
                   {{-- <img class="hidden-sm-down zoom" src="{{ asset('assets/images/admiror/admiror_brown.png') }}"> --}}
                   <img class="hidden-sm-down " src="{{ asset('assets/images/admiror/admiror_brown.png') }}">
                   <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                      <li style="background-color: #b1816b"  class="active"  data-image="{{ asset('assets/images/admiror/admiror_brown.png') }}"></li>
                      <li style="background-color: #d08364" data-image="{{ asset('assets/images/admiror/admiror_gold.png') }}"></li>
                      <li style="background-color: #efa4a1" data-image="{{ asset('assets/images/admiror/admiror_pink.png') }}"></li>
                      <li style="background-color: #75779b"data-image="{{ asset('assets/images/admiror/admiror_blue.png') }}"></li>
                      <li style="background-color: #b7b189" data-image="{{ asset('assets/images/admiror/admiror_green.png') }}"></li>
                   </ul>
                </a>
             </nav>
          </div>
       </div>
       <!--------------END PRODUCT IMAGES-------------->
       <!-- Tab panes PRODUCT SPEC-->
       <div class="tab-content">
          <!------------------ AVITA ADMIROR (14-inch) -------------------------------------------------->
          <div class="tab-pane active" id="spec-4" role="tabpanel">
             <div class="container">
                <div class="logo-wrapper d-flex px-3 mt-4">
                   <div class="offset-md-1">
                      <img style="width: 200px;" src="https://www.avita-india.com/images/win10_logo.png" alt="Windows 10 Home">
                   </div>
                </div>
                <ul class="list-unstyled spec-list">
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Operating System</div>
                      <div>Windows 10 Home</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">CPU</div>
                      <div>Intel® Core™ i5-8265U Processor<br />
                         Intel® Core™ i7-8565U Processor
                      </div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Display</div>
                      <div>14 TFT (1920x1080) IPS</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Memory</div>
                      <div>8GB DDR4</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                      <div>Intel® UHD Graphics 620</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Storage</div>
                      <div>256GB / 512GB SSD SATA M.2</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                      <div>720p HD</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Audio</div>
                      <div>2W x 2 + passive booster x 4, Dual Microphones</div>
                   </li>
                   <!--<li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                      <div>Island-type Keyboard (with Backlit)</div>
                      </li>-->
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                      <div>IEEE 802.11 b/g/n/ac</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                      <div>Bluetooth v4.2</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                      <div>USB 3.0 Type-C x 2 (PD 2.0 charging, Display out)</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                      <div>325mm(W) x 235mm(D) x 18mm(H)</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Weight</div>
                      <div>Starting from 1.32 kg</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Battery</div>
                      <div>Li-ion Battery, 38.5Wh</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                      <div>Up to 10 hours*</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Material</div>
                      <div>Aluminum, Magnesium</div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Colour</div>
                      <div>Blazing Brown, Flaming Copper, Delight Pink, Pride Blue*, Traveler Green* <small>(* To be released)</small></div>
                   </li>
                   <li class="spec-item d-flex">
                      <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                      <div>AC Adapter, Power cord, USB-C to USB + HDMI + Headphone Jack Adapter, USB-C to 3.5mm Converter Cable</div>
                   </li>
                </ul>
             </div>
          </div>
          <!------------------ End AVITA ADMIROR (14-inch) ------------------------------------>
       </div>
    </section>
    <!-- DISCLAIMER-->
    <section class="product-statement mt-4 mt-sm-0">
       <div class="container">
          <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
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
