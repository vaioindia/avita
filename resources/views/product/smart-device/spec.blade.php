@extends('layouts.parent')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product-imago.css') }}">
@endsection
@section('content')
<!-- Content -->

<main class="top-nav-padding" style="background-color: #f0f0f0;">

    @include('partials.imago-product-navbar')

   {{-- <div class="nav-product-panel">
      <div class="container">
         <div class="product-nav-toggler h2 text-center my-1 hidden-sm-up">
            <i class="product-nav-icon fa fa-angle-up" aria-hidden="true"></i>
         </div>
         <div class="product-nav-collapse">
            <ul class="nav-product d-flex list-unstyled flex-column justify-content-center text-center flex-sm-row justify-content-sm-end py-2 mb-0">
               <li class="nav-item"><a class="nav-link py-1" href="https://www.avita-india.com/product/imago">Overview</a></li>
               <li class="nav-item"><a class="nav-link py-1" href="https://www.avita-india.com/product/imago/spec">Tech Spec</a></li>
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
    <section>
        <div class="container py-5">
            <nav class="nav nav-pills nav-product-spec justify-content-center text-center">
                <a class="nav-spec col text-center py-3 active" href="#spec-1" data-toggle="tab" role="tab">
                    <div class="text-center mb-md-4"><b>IMAGO</b> IM100</div>
                    <img class="hidden-sm-down" src="{{ asset('assets/images/imago/vs1.png') }}">
                </a>
                <a class="nav-spec col text-center py-3" href="#spec-2" data-toggle="tab" role="tab">
                    <div class="text-center mb-md-4"><b>IMAGO</b> IM200</div>
                    <img class="hidden-sm-down" src="{{ asset('assets/images/imago/vs2.png') }}">
                </a>
            </nav>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="spec-1" role="tabpanel">
                <div class="container">
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Configuration</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">CPU</div>
                            <div>Rockchip 3288</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Frequency</div>
                            <div>Cortex A17</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">GPU</div>
                            <div>Mali-T764</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">RAM</div>
                            <div>2GB</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">ROM</div>
                            <div>8GB (64G Optional)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Wifi</div>
                            <div>2.4G/5G Double frequency 802.11 a/b/g/n</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Bluetooth</div>
                            <div>Bluetooth 4.0</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">OS</div>
                            <div>Android 5.1.X</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Waterproof capacitive touch screen</div>
                            <div>YES (10 points)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Speaker</div>
                            <div>2x2W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Power button(touch)</div>
                            <div>YES</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Motion sensor</div>
                            <div>YES (20~80cm)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Ports</div>
                            <div style="line-height: 2rem">
                                USB:1<br> USE(OTG):1
                                <br> Audio switch:YES<br> RCA (Audio out):2 (Red & white)
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Power/Consumption</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Power input</div>
                            <div>AC 100-240V 2AMax 50/60Hz</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Consumption</div>
                            <div>&le; 45W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Standby Consumption</div>
                            <div>&le; 1W</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Display</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display size</div>
                            <div>21.5"</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display type</div>
                            <div>IPS</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display ratio</div>
                            <div>16:9</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Resolution</div>
                            <div>1920 x R.G.B x 1080</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Brightness</div>
                            <div>1000 cd/m2 (Original LED screen)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Contrast Ratio</div>
                            <div>4000:1</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Viewing angle</div>
                            <div>178&deg; (H) X 178&deg; (V)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display color</div>
                            <div>16.7M</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Response time</div>
                            <div>5ms</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Working life</div>
                            <div>25000 Hours</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">General Dimension</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">General Size</div>
                            <div>800X600mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Thickness</div>
                            <div>40mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Mirror panel</div>
                            <div>Coated Silver Mirror</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Material</div>
                            <div>Stainless steel bracket, metal casing, plastic parts and etc.</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">IP level</div>
                            <div>IP65</div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- tab 2 (IMAGO IM200) -->
            <div class="tab-pane" id="spec-2" role="tabpanel">
                <div class="container">
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Configuration</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">CPU</div>
                            <div>Rockchip 3288</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Frequency</div>
                            <div>Cortex A17 1.8GHz</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">GPU</div>
                            <div>Mali-T764</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Image processor</div>
                            <div style="line-height: 2rem">
                                OPENGL ES1.1/2.0/3.0, OPEN VG1.1<br> OPENCL, Directx11<br> 2D/3D
                                <br> 4K, H.265 decoder
                            </div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">RAM</div>
                            <div>2GB</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">ROM</div>
                            <div>8GB (64G Optional)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Wifi</div>
                            <div>2.4G/5G Double frequency 802.11 a/b/g/n</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Bluetooth</div>
                            <div>Bluetooth 4.0</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">OS</div>
                            <div>Android 5.1.X</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2" style="border : 0;">
                            <div class="offset-md-1 col-5 col-md-5">Waterproof capacitive touch screen</div>
                            <div>YES (10 points)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2" style="border : 0;">
                            <div class="offset-md-1 col-5 col-md-5">Speaker</div>
                            <div>2*2W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2" style="border : 0;">
                            <div class="offset-md-1 col-5 col-md-5">Power button(touch)</div>
                            <div>YES</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Motion sensor</div>
                            <div>YES (20~80cm)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Ports</div>
                            <div style="line-height: 2rem">
                                DC IN:1<br> USE(OTG):1
                                <br> USD:1
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Power/Consumption</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Power input</div>
                            <div>DC 12V 3A</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Consumption</div>
                            <div>&le; 36W</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Standby Consumption</div>
                            <div>&le; 0.6W</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list mb-5 pb-2">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">Display</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display size</div>
                            <div>13.3"</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display type</div>
                            <div>IPS</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Display ratio</div>
                            <div>16:9</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Resolution</div>
                            <div>1920 x R.G.B x 1080</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Brightness</div>
                            <div>350 cd/m2 (Original LED screen)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Contrast Ratio</div>
                            <div>1000:1</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Viewing angle</div>
                            <div>178&deg; (H) X 178&deg; (V)</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Response time</div>
                            <div>16ms</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Working life</div>
                            <div>&ge; 20000 Hours</div>
                        </li>
                    </ul>
                    <ul class="list-unstyled spec-list">
                        <li class="imago-spec-title d-flex py-2">
                            <div class="offset-md-1 col-12">General Dimension</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">General Size</div>
                            <div>&Phi;500mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Thickness</div>
                            <div>36mm</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Mirror panel</div>
                            <div>Diamond level coated glass</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">Material</div>
                            <div>Aluminium-alloy rim, plastic back shell</div>
                        </li>
                        <li class="imago-spec-item d-flex py-2">
                            <div class="offset-md-1 col-5 col-md-5">IP level</div>
                            <div>IP65</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-wrap py-5 justify-content-around align-items-center">
            <div class="mx-3 my-3">
                <img src="{{ asset('assets/images/imago/icon1.png') }}">
            </div>
            <div class="mx-3 my-3">
                <img src="{{ asset('assets/images/imago/icon2.png') }}">
            </div>
            <div class="mx-3 my-3">
                <img src="{{ asset('assets/images/imago/icon3.png') }}">
            </div>
            <div class="mx-3 my-3">
                <img src="{{ asset('assets/images/imago/icon4.png') }}">
            </div>
            <div class="mx-3 my-3">
                <img src="{{ asset('assets/images/imago/icon5.png') }}">
            </div>
            <div class="mx-3 my-3">
                <img src="{{ asset('assets/images/imago/icon6.png') }}">
            </div>
            <div class="mx-3 my-3">
                <img src="{{ asset('assets/images/imago/icon7.png') }}">
            </div>
        </div>

    </section>

</main>

<!-- ./Content -->


@endsection


@section('scripts')
        <script type="text/javascript" src="{{ asset('assets/js/imago.js') }}"></script>
@endsection
