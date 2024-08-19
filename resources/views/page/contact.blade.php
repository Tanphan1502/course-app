@extends('layout')
@section('title')
    Liên hệ
@endsection
@section('body')
      <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 pt-5 mt-5 text-center">
          <p class="breadcrumbs"><span class="me-2"><a href="{{route('home')}}">Trang Chủ <i
                  class="fa fa-chevron-right"></i></a></span> <span>@yield('title') <i class="fa fa-chevron-right"></i></span>
          </p>
          <h1 class="mb-0 bread">@yield('title')</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row g-0">
              <div class="col-lg-6 order-lg-last">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <h3>@yield('title')</h3>
                  <p class="mb-4">Chúng tôi có thể hỗ trợ bạn tại các kênh:</p>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Địa chỉ:</span> 21 Tuy Hoà, Phú Yên, Việt Nam</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Email:</span> <a
                              href="https://preview.colorlib.com/cdn-cgi/l/email-protection#6e070008012e17011b1c1d071a0b400d0103"><span
                                class="__cf_email__"
                                data-cfemail="771e191118370e180205041e03125914181a">[email&#160;protected]</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="dbox w-100 d-flex align-items-start">
                        <div class="text">
                          <p><span>Số điện thoại:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- START FORM CONTACT --}}
                  <form id="contactForm" name="contactForm" class="contactForm">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" id="name" placeholder="Họ và tên của bạn">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Chủ đề cần giải đáp">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                            placeholder="Nội dung bạn cần liên hệ"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" value="Gửi phản hồi" class="btn btn-primary">
                          <div class="submitting"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                    {{-- END FORM CONTACT --}}
                  <div class="w-100 social-media mt-5">
                    <h3>Theo dõi chúng tôi trên</h3>
                    <p>
                      <a href="#">Facebook</a>
                      <a href="#">Twitter</a>
                      <a href="#">Instagram</a>
                      <a href="#">TikTok</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-stretch">
                <div id="map" class="bg-white">ASD</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection