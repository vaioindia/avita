@extends('layouts.parent')

@section('css')

@endsection

@section('content')

<!-- Content -->

<main>
    <section class="top-nav-padding support-search-section">
       <div class="support-search-wrap pb-sm-5">
          <div class="container h-100">
             <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-6 text-center">
                   <form method="POST" action="#" class="">
                      <input type="hidden" name="_token" value="XXDDlgMDVG2THF3EyO5YdC80XD3wSc7QMIp4J6ja">
                      <div class="support-search-mob-img">
                         <img class="hidden-lg-up " src="{{ asset('assets/images/background/support-min.png') }}"/>
                      </div>
                      <div class="h1 section-title my-4 ls-0 font-weight-light">We're Here To Help!</div>
                      <div class="row no-gutters my-4 align-content-center justify-content-center col-12 col-sm-8 col-lg-12 mx-auto">
                         <div class="col-12 col-md-12 col-md-12 ml-0 ml-md-4">
                            <div class="form-group mb-2">
                               <select id="product_type_field" name="type" class="form-control custom-select mb-3">
                               </select>
                               <select id="product_series_field" name="series" class="form-control custom-select mb-3" style="display: none;">
                               </select>
                               <select id="marketing_number_field" name="marketing_number" class="form-control custom-select mb-3" style="display: none;">
                               </select>
                               <select id="product_number_field" name="product_number" class="form-control custom-select mb-3" style="display: none;">
                               </select>
                               <button class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">&nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp;</button>
                            </div>
                         </div>
                      </div>
                   </form>
                   <br/>
                   <img src="{{ asset('assets/images/contact.png') }}" style="width:320px;">
                </div>
             </div>
          </div>
          <div class="hidden-md-down panel-image">
             <img src="{{ asset('assets/images/background/support-min.png') }}"/>
          </div>
       </div>
       <div class="support-center-wrap py-5">
       <div class="h1 text-center mt-4 mb-3 font-weight-light">Warranty Extension</div>
       <div class="text-center purchase_steps">
          <a href="#" target="_blank" class="btn btn-primary support-search-btn-block mt-3 mt-md-0 mx-auto ml-md-3 px-5 px-md-0">See More</a>
       </div>
       <br/>
       <div class="container">
       <div class="alert alert-dismissible alert-info">
          Due to the global outbreak of the coronavirus (COVID-19), the service center will adjust the operation time or temporarily shut down for the time being. The adjustment will be subjected to local regulations and will be updated as soon as possible. We thank you for your patience and understanding.
       </div>
       <div class="panel-heading">
          <div class="h2 text-center section-title mb-3 ls-0 font-weight-light pt-5">Service Center</div>
          <div class="panel-body">
             <div class="alert alert-success">

                <div class="col-md-12">
                   <div>
                      <i class="fa fa-map icon"></i>
                      Customer Service Hotline
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09:30AM-6:30PM (Mon to Sat, Excluding 3rd Saturday), close on Sunday and Public Holidays
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      1800-103-9635
                   </div>
                   <div>
                      <i class="fa fa-envelope icon"></i>
                      india_support@avita.com
                   </div>
                </div>
             </div>

             <div class="row shopsList ">
                @foreach ($services as $service)
                <div class="col-md-6">
                   <div style="font-size: 1.5rem;">
                      <i class="fa fa-map icon"></i>
                      {{-- Sco:11&amp;12 Iˢᵗ Floor ,Lawrence Road Plaza,Near Pizza Hut Amritsar -143001 --}}
                      {{ $service->address }}
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      {{-- 09.30AM - 6.30PM (MON - SAT) --}}
                      {{ $service->opening_hour }} AM  - {{ $service->closing_hour }} PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      {{-- +91-7508443565, +91-7508443565, +91-9988450788 --}}
                      {{ $service->phone }}
                   </div>
                   <br>
                </div>
                @endforeach

                {{-- <div class="col-md-6">
                   <div>
                      <i class="fa fa-map icon"></i>
                      7, Chishi Marketing Complex, 1ˢᵗ Floor, Circular Road, Dimapur Nagaland-797112
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09.30AM - 6.30PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      +91-8721064054, +91-9077003374, +91-9774748579/8721064054
                   </div>
                </div>

                <div class="col-md-6">
                   <div>
                      <i class="fa fa-map icon"></i>
                      Digiworld,12 Square Tower,Marris Road,Aligarh,-202001
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09.30AM - 6.30PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      +91-8272082730,+91-9258007766, +91-9258007766
                   </div>
                </div>

                <div class="col-md-6">
                   <div>
                      <i class="fa fa-map icon"></i>
                      Nazrul Sarani, Ground Floor, Near Maya Sanyal Nurshing Home, Ashram Para, Siliguri-734001
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09.30AM - 6.30PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      +91-9832423214, +91-9434061776, +91-9434061776
                   </div>
                </div>

                <div class="col-md-6">
                   <div>
                      <i class="fa fa-map icon"></i>
                      Gandhighat, Melarmath, (Opp) Vivekenanda Vyamager,Tripura (W)-799001
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09.30AM - 6.30PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      +91-8257920241, +91-8257920241,    +91-8257920241
                   </div>
                </div>

                <div class="col-md-6">
                   <div>
                      <i class="fa fa-map icon"></i>
                      Office No 1, First Floor, Krushna Arcade, Serve No 1248, North Kasaba, Behind Old Vithal Mandir, Solapur 413007
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09.30AM - 6.30PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      +91-9579277030, +91-9881165452 +91-9552897713
                   </div>
                </div>

                <div class="col-md-6">
                   <div>
                      <i class="fa fa-map icon"></i>
                      113, G.T.Road (East), Rambandhu Talab, Pandey Tower, Nr Hanuman Mandir, Asansol-713303
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09.30AM - 6.30PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      +91-9563329616,+91-8170024650, +91-8170024650
                   </div>
                </div>

                <div class="col-md-6">
                   <div>
                      <i class="fa fa-map icon"></i>
                      First Floor , Guru Teg Bahadur Market,Tikonia, Haldwani, Nainital - (U.K.) 263139
                   </div>
                   <div>
                      <i class="fa fa-clock-o icon"></i>
                      09.30AM - 6.30PM (MON - SAT)
                   </div>
                   <div>
                      <i class="fa fa-phone icon"></i>
                      +91-7055208880, +91-9058827772, +91-9058678880
                   </div>
                </div> --}}

                </div>
             </div>
          </div>
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
