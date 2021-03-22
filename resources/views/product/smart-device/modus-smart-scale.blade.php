@extends('layouts.parent')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/product-imago.css') }}">

@endsection

@section('content')

<!-- Content --> 
<main class="top-nav-padding">
    <div class="product-fix-menu">
    
          <div class="menu-item">        
                      
          <a href="https://in.nexstmall.com/" target="_blank">BUY<br><small>NOW</small></a> 
          
         
          </div>
    
          <div class="menu-item">
             <a href="https://avita-india.com/where-to-buy">Where<br><small>to buy</small></a>
          </div>
    
          </div>
       <section class="">
    
            <img src="https://www.avita-india.com/images/modus/modus.jpg" class="w-100 ">
    
        </section>
    
    </main>
 
 <!-- ./Content -->

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/imago.js') }}"></script>

@endsection