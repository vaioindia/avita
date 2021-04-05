<section class="email-subscription py-5 ls-0">
    <form class="email-subscription-form col-12 col-lg-8 col-xl-6 mx-auto" role="form" method="POST" action="bscribe"  enctype="multipart/form-data" >
       <input type="hidden" name="_token" value="XXDDlgMDVG2THF3EyO5YdC80XD3wSc7QMIp4J6ja">
       <h2 class="text-center mt-4 mb-3 font-weight-light">Join the AVITA Community</h2>
       <div class="text-center mt-3 mb-4 lead">Receiving AVITA&#039;s latest news, promotions and offer</div>
       <div class="row my-4 no-gutters justify-content-center">
          <div class="col-12 col-sm-7 col-md-6 col-lg-7 ml-auto">
             <div class="input-group">
                <div class="input-group-addon overlay-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <input id="email" type="text" class="form-control" name="email" required>
             </div>
          </div>
          <div class="form-group">
             <div class="col-12 col-sm-4 col-md-4">
                <button class="btn btn-primary d-block mt-3 mt-sm-0 mt-md-0 mx-auto ml-md-3" type="submit">Subscribe Now</button>
             </div>
          </div>
       </div>
    </form>
    <p class="download-brochure" >
        <a href="/images/AVITA-Products-Brochure.pdf" target="_blank" download="AVITA-Family-Brochure.pdf">
            <button class="btn btn-primary btn-lg " type="button">
                Download Brochure
            </button>
        </a>
    </p>

    {{-- <p class="download-brochure" >
        @foreach ($brochures as $brochure)
        <a href="{{ url('brochures/'. $brochure->reference)  }}" target="_blank" download="{{ $brochure->reference }}">
            <button class="btn btn-primary btn-lg " type="button">
                Download Brochure
            </button>
        </a>
        @endforeach
    </p> --}}

 </section>
