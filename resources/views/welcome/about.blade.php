@extends('layouts.main')



@section('title')
    ABOUT
@endsection


@section('content')
<div class="hero-wrap">
    <div class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/log-6.jpg);">
          <div class="overlay"></div>
        <div class="container">
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/log-2.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end">
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- END nav -->


<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex order-md-last">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url(images/log-1.jpg);">
                </div>
            </div>
            <div class="col-md-6 pr-md-5 py-md-5">
                <div class="row justify-content-start py-5">
              <div class="col-md-12 heading-section ftco-animate">
                  <span class="subheading">Welcome to Be Creative Multipurpose Co-operative Limited</span>
                <h2 class="mb-4">About Our Company</h2>
                <p>Be-Creative Multi-purpose Cooperative Society Limited formulated to foster improvement of our livelihoods and diverted social economic development of Zambia. The cooperative was founded in May 2016, by Francis Mwamba and governed by the board of trustees, the board which is the policy making organ that ensures the smooth running of the Cooperatives from a monitoring point of view, therefore, the Cooperative was registered on 19 May 2016, under the laws of Zambia by the registrar of Cooperative societies to obtain its legal identity for its operation activities and its legal status. Since its inception, the cooperative has grown very fast and it has attracted over 30 members.</p>
              </div>
            </div>
                    <div class="row ftco-counter pb-5" id="section-counter">
              <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="5">0</strong>
                  </div>
                  <div class="text">
                      <span>Years of <br>Experienced</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="6">0</strong>
                  </div>
                  <div class="text">
                      <span>Happy <br>Customers</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="0">0</strong>
                  </div>
                  <div class="text">
                      <span>Award <br>Winning</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>A Co-Operative</h4>
                <p>It is the autonomous association of persons united voluntarily to meet their common economic, social, and cultural needs and-aspirations through a jointly owned and democratically controlled enterprise.</p>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="container" data-aos="fade-up">

      <div class="row about-cols">

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="about-col">
            <div class="img">
              <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Objective</a></h2>
            <p>
                Encourage financial institution to develop products that respond to diverse financial needs of young men and women for education, training, business start-up and expansion
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="about-col">
            <div class="img">
              <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Mission</a></h2>
            <p>
                To facilitate the provision of quality and relevant skills training for the agriculture sector and other economic sectors.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="about-col">
            <div class="img">
              <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-eye-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Our Vision</a></h2>
            <p>
                Empowerment of youths through various sector interventions in the quest to reduce poverty among the youth therefore raising their standard of living.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End About Us Section -->
@endsection


@section('scripts')
    //
@endsection
