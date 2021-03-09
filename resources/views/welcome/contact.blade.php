@extends('layouts.main')



@section('title')
    CONTACT
@endsection


@section('content')
<div class="hero-wrap">
    <div class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/log-3.jpg);">
          <div class="overlay"></div>
        <div class="container">
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/log-4.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end">
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- END nav -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    <div id="map" class="map"></div>
                </div>
                 <div class="col-md-12 d-flex align-items-stretch">
                     <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                         <h3 class="mb-4 mt-md-4">Do Not Hesitate To Contact us</h3>
                 <div class="dbox w-100 d-flex align-items-start">
                     <div class="icon d-flex align-items-center justify-content-center">
                         <span class="fa fa-map-marker"></span>
                     </div>
                     <div class="text pl-3">
                     <p><span>Physical Address:</span> C/O CHIBOTE AGRICULTURE CAMP P.O. BOX 410166, KASAMA, NORTHERN PROVINCE.</p>
                   </div>
               </div>
                 <div class="dbox w-100 d-flex align-items-center">
                     <div class="icon d-flex align-items-center justify-content-center">
                         <span class="fa fa-phone"></span>
                     </div>
                     <div class="text pl-3">
                     <p><span>Phone:</span> <a href="tel://0966481611">+260 966481611</a></p>
                   </div>
               </div>
                 <div class="dbox w-100 d-flex align-items-center">
                     <div class="icon d-flex align-items-center justify-content-center">
                         <span class="fa fa-paper-plane"></span>
                     </div>
                     <div class="text pl-3">
                     <p><span>Phone:</span> <a href="tel://0971164565">+260 971164565
                     </a></p>
                   </div>
               </div>
                 <div class="dbox w-100 d-flex align-items-center">
                     <div class="icon d-flex align-items-center justify-content-center">
                         <span class="fa fa-globe"></span>
                     </div>
                     <div class="text pl-3">
                     <p><span>Email</span> <a href="mailto:becreative600@gmail.com">becreative600@gmail.com</a></p>
                   </div>
               </div>
           </div>
    </div>
</section>
@endsection


@section('scripts')
    //
@endsection
