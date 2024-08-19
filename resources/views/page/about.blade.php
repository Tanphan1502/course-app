@extends('layout')
@section('title')
    Về chúng tôi
@endsection
@section('body')
      <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 mt-5 text-center">
          <p class="breadcrumbs"><span class="me-2"><a href="index-2.html">Trang chủ <i
                  class="fa fa-chevron-right"></i></a></span> <span>@yield('title') <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">@yield('title')</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-xl">
      <div class="row g-xl-5">
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
          data-aos-duration="1000">
          <div class="img w-100" style="background-image: url(images/about.jpg);">
          </div>
        </div>
        <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
          data-aos-duration="1000">
          <div class="mt-0 my-lg-5 py-5">
            <span class="subheading">Learn Anything</span>
            <h2 class="mb-2">Benefits About Online Learning Expertise</h2>
            <div class="row mt-4 g-lg-2">
              <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                <div class="services d-flex">
                  <div class="icon"><span class="flaticon-online-learning"></span></div>
                  <div class="text">
                    <h2>Online Courses</h2>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and
                      Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                <div class="services d-flex">
                  <div class="icon"><span class="flaticon-certificate"></span></div>
                  <div class="text">
                    <h2>Earn A Certificates</h2>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and
                      Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                <div class="services d-flex">
                  <div class="icon"><span class="flaticon-scientist"></span></div>
                  <div class="text">
                    <h2>Learn with Expert</h2>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and
                      Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section-counter img" style="background-image: url(images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row section-counter">
        <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
          <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="icon">
              <span class="flaticon-graduation"></span>
            </div>
            <div class="text">
              <h2 class="number"><span class="countup">3000</span></h2>
              <span class="caption">Success Stories</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
          <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="icon">
              <span class="flaticon-scientist"></span>
            </div>
            <div class="text">
              <h2 class="number"><span class="countup">320</span></h2>
              <span class="caption">Trusted Tutors</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
          <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <div class="icon">
              <span class="flaticon-calendar"></span>
            </div>
            <div class="text">
              <h2 class="number"><span class="countup">1000</span></h2>
              <span class="caption">Schedules</span>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
          <div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <div class="icon">
              <span class="flaticon-learning"></span>
            </div>
            <div class="text">
              <h2 class="number"><span class="countup">587</span></h2>
              <span class="caption">Courses</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section testimony-section bg-light">
    <div class="container-xl">
      <div class="row justify-content-center pb-4">
        <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
          <span class="subheading">Testimonial</span>
          <h2 class="mb-5">Our Successful Students</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div class="carousel-testimony">
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <div class="d-flex align-items-center mb-4">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)">
                      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left">
                      </div>
                    </div>
                    <div class="ps-3 tx">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                  <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <div class="d-flex align-items-center mb-4">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)">
                      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left">
                      </div>
                    </div>
                    <div class="ps-3 tx">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                  <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <div class="d-flex align-items-center mb-4">
                    <div class="user-img" style="background-image: url(images/person_3.jpg)">
                      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left">
                      </div>
                    </div>
                    <div class="ps-3 tx">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                  <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <div class="d-flex align-items-center mb-4">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)">
                      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left">
                      </div>
                    </div>
                    <div class="ps-3 tx">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                  <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="text">
                  <div class="d-flex align-items-center mb-4">
                    <div class="user-img" style="background-image: url(images/person_2.jpg)">
                      <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left">
                      </div>
                    </div>
                    <div class="ps-3 tx">
                      <p class="name">Roger Scott</p>
                      <span class="position">Marketing Manager</span>
                    </div>
                  </div>
                  <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and
                    Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <section class="ftco-intro py-5 bg-primary">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
          <div class="row g-lg-5">
            <div class="col-md-7 text-lg-right">
              <h2 class="mb-0">Newsletter - Stay tune and get the latest update</h2>
              <p>Far far away, behind the word mountains</p>
            </div>
            <div class="col-md-5 border-left d-flex align-items-center">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex align-items-center">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <a href="#" class="btn-icon"><span class="fa fa-paper-plane"></span></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
@endsection