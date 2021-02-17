@extends('layouts.parent')


@include('partials.header')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 h-60" src="/images/banner/AVITA_liber_v_banner_web.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-60" src="/images/banner/AVITA_liber_v_banner_web.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-60" src="/images/banner/AVITA_liber_v_banner_web.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-60" src="/images/banner/AVITA_liber_v_banner_web.jpg" alt="Forth slide">
      </div>
    </div>
    
  </div>

  <section class="  mt-1">
    <div class="row no-gutters">

      <div class=" col-12 col-sm-6 col-xl-3 ">
        <div class="card" style="width: 21rem;">
          <a href="#"><img class="card-img-top" src="/images/demo/promo-01-en.jpg" alt="Card image cap"></a>  
        </div>      
      </div>

      <div class=" col-12 col-sm-6 col-xl-3 ">
        <div class="card" style="width: 21rem;">
          <a href="#"><img class="card-img-top" src="/images/demo/promo-02-en.jpg" alt="Card image cap"></a>  
        </div>      
      </div>

      <div class=" col-12 col-sm-6 col-xl-3 ">
        <div class="card" style="width: 21rem; ">
          <a href="#"><img class="card-img-top" src="/images/demo/promo-03-en.jpg" alt="Card image cap"></a>  
        </div>      
      </div>

      <div class=" col-12 col-sm-6 col-xl-3 ">
        <div class="card" style="width: 21rem;">
          <a href="#"><img class="card-img-top" src="/images/demo/promo-04-en.jpg" alt="Card image cap"></a>  
        </div>      
      </div>

    </div>
  </section>

  <section>
    <form class="email-subscription-form col-12 col-lg-8 col-xl-6 mx-auto" role="form" method="POST" action=""  enctype="multipart/form-data">
          <div class="mt-5">
            <div class="mb-3">
                    <h1 class="text-center mt-4 mb-3 font-weight-light">Join the AVITA Community</h1>
                    <div class="text-center mt-3 mb-4 lead">Receiving AVITA's latest news, promotions and offer</div>
                    <div class="row my-4 no-gutters justify-content-center">
                      <div class="col-12 col-sm-7 col-md-6 col-lg-7 ml-auto">
                        <div class="input-group">
                          <div class="input-group-addon overlay-addon"></div>
                              <input id="email" type="text" class=" form-control" name="email" required>
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-12 col-sm-4 col-md-4">
                            <button class="btn btn-primary d-block mt-3 mt-sm-0 mt-md-0 mx-auto ml-md-3 text-capitalize" type="submit">subscribe</button>
                        </div>
                      </div>
                   </div>   
            </div>
          </div>   
    </form>
  </section>

@endsection


