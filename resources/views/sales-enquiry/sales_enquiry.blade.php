@extends('layouts.parent')

@section('css')

@endsection

@section('content')

<main class="top-nav-padding">
    <section class="product-liber-banner py-5 px-2"  style="background-color: #f0f0f0;">
       <div class="row">
       <div class="container"  style="text-align: center; padding:2%;">
          <h1 class="text-center mt-0 mb-2 font-weight-light">Sales Enquiry</h1>
          <br/>
          <div>
             <p>Dear AVITA fans, Thank you for your support for AVITA. Please fill in the form below for any sales enquiries. Our tech support team replies to all your sales enquiry promptly.  All fields marked with an asterisk (*) are required to register your sales enquiry.</p>
          </div>
          <br/>
          <div>
             <strong>Toll Free</strong>: 1800-103-9635, <strong>Whatsapp</strong>: <a href="https://api.whatsapp.com/send?phone=917827845054" target="_blank" rel="noopener noreferrer">+91-7827845054</a>
          </div>
          <div class="container"  style="text-align: center; padding:5%;">
             <form action="/sales-enquiry" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="XXDDlgMDVG2THF3EyO5YdC80XD3wSc7QMIp4J6ja">
                <!--Student Name Start-->
                <div class="form-group row">
                   <label for="name">Name* :</label>
                   <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" require>
                </div>
                <!-- Student Name End-->
                <!-- Email Start-->
                <div class="form-group row">
                   <label for="email">Email*:</label>
                   <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" require>
                </div>
                <!-- Email End-->
                <!-- Phone Number Start-->
                <div class="form-group row">
                   <label for="phone">Phone Number* :</label>
                   <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" require>
                </div>
                <!-- Phone Number End-->
                <!-- Enquiry Start-->
                <div class="form-group row">
                   <label for="internship">Enquiry* :</label>
                   <textarea class="form-control" rows="4", cols="54" id="enquiry" name="enquiry" require> </textarea>
                   <!-- College Name End-->
                </div>
                <div class="form-group row">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </div>
          </form>
       </div>
    </section>
    <div class="gotop-wrap">
       <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>
 </main>

@endsection

@section('scripts')

@endsection