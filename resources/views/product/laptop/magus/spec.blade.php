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
    <!--------------->
    <div class="product-fix-menu">

            <div class="menu-item">

            <a href="https://in.nexstmall.com/" target="_blank">BUY<br><small>NOW</small></a>


            </div>

            <div class="menu-item">
                <a href="https://avita-india.com/where-to-buy">Where<br><small>to buy</small></a>
            </div>

            </div>
            <section>

                <div class="nav-product-wrap">
                    <div class="container px-0">
                        <nav class="nav nav-pills nav-product-spec justify-content-center">

                            <a class="col text-center nav-link active" data-toggle="tab" href="#spec-4" role="tab">
                                <div class="spec-item-name mb-4"><div class="d-sm-block">MAGUS Lite</div></div>
                                <img class="hidden-sm-down" src="{{ asset('assets/images/magus/magus_grey.png') }}">
                                {{-- <img class="hidden-sm-down zoom" src="{{ asset('assets/images/magus/magus_grey.png') }}"> --}}
                                <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                    <li style="background-color: #434343" class="active" data-image="{{ asset('assets/images/magus/magus_grey.png') }}"></li>
                                    <li style="background-color: #b699ca" data-image="{{ asset('assets/images/magus/magus_violet.png') }}"></li>
                                    <li style="background-color: #dbb2a7" data-image="{{ asset('assets/images/magus/magus_pink.png') }}"></li>
                                    <li style="background-color: #576f91" data-image="{{ asset('assets/images/magus/magus_blue.png') }}"></li>
                                </ul>
                            </a>
                        </nav>
                    </div>
                </div>



                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="spec-4" role="tabpanel">
                        <div class="container">


                            <ul class="list-unstyled spec-list">
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Operating System </div>
                                    <div>Windows 10 Home</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                    <div>Intel® Celeron® N3350</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Display</div>
                                    <div>12.2 TFT,  (1920 x 1200) IPS Touch Screen</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                    <div>4GB DDR3</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                    <div>Intel® HD Graphics 500</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                    <div>64GB eMMC</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                    <div>1 x Speaker </div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                    <div>English Travel Keyboard</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                    <div>IEEE 802.11 b/g/n/ac</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                    <div>Bluetooth v4.0 </div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                    <div>1 x 3.5mm Headphone, 1 x USB 3.0, 1 x Mini-HDMI, 1 x microSD card Slot</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                    <div>299mm (W) x 206mm (D) x 22mm (H)</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                    <div>Overall weight : 1.41kg / Tablet weight: 1.07kg / Keyboard weight: 0.34kg</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                    <div>Li-ion Battery </div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                    <div>Up to 8 hours*</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Color</div>
                                    <div>Steel Blue, Charcoal Grey, Seashell pink, Pastel Violet</div>
                                </li>
                                <li class="spec-item d-flex">
                                    <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                    <div>AC Adapter and  Power cord, English Travel Keyboard, 64GB microSD card</div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

            </section>

            <section class="product-statement mt-4 mt-sm-0">
                <div class="container">
                    <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
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
