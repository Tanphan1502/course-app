<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | Minh Triết</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/animate.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/tiny-slider.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/glightbox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/aos.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
</head>

<body>
    <!--START TOP NAV -->
    <div class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md col-xl-5 d-flex align-items-center">
                    <a class="navbar-brand align-items-center" href="">
                        MINH TRIẾT
                        <span>Đồng hành cùng bạn - Tăng cân an lành!</span>
                    </a>
                </div>
                <div class="col-md d-flex align-items-center">
                    <div class="con d-flex">
                        <div class="icon"><span class="flaticon-clock"></span></div>
                        <div class="text">
                            <span>Thứ 2 - Thứ 7</span>
                            <strong>8:00AM-8:00PM</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-center">
                    <div class="con d-flex">
                        <div class="icon"><span class="flaticon-telephone"></span></div>
                        <div class="text">
                            <span>Liên hệ</span>
                            <strong>+000 000 000</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-end align-items-center">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP NAV -->
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg  ftco-navbar-light">
        <div class="container-xl">

            <a href="#" class="btn-custom order-lg-last">Nhận chứng chỉ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="courses.html">Khoá học</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Về chúng tôi</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CONTENT BLOCK  -->
    @yield('body')
    <!--END CONTENT BLOCK  -->

    <!-- START NEWSLETTER BLOCK -->
    <section class="ftco-intro py-5 bg-primary">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-lg-5">
                        <div class="col-md-7 text-lg-right">
                            <h2 class="mb-0">Nhận thông tin mới nhất từ chúng tôi</h2>
                            <p>Hãy trở thành người đầu tiên nhận tin mới nhất</p>
                        </div>
                        <div class="col-md-5 border-left d-flex align-items-center">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex align-items-center">
                                    <input type="text" class="form-control" placeholder="Nhập Email của bạn tại đây">
                                    <a href="#" class="btn-icon"><span class="fa fa-paper-plane"></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- START NEWSLETTER BLOCK -->
    <!-- STAR FOOTER -->
    <footer class="ftco-footer">
        <div class="container-xl">
            <div class="row mb-5 justify-content-between">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo d-flex">
                            <a class="navbar-brand align-items-center" href={{ route('home') }}>
                                Minh Triet
                                <span >Đồng hành cùng bạn - Tăng cân an lành!</span>
                            </a>
                        </h2>
                        
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Khám phá</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Về chúng
                                    tôi</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Dịch
                                    vụ</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Khoá
                                    học</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Bài
                                    viết</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Liên
                                    hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Liên Kết Nhanh</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Liên
                                    hệ</a></li>
                            
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Điều
                                    khoản</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Riêng
                                    tư</a></li>
                            <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Phản
                                    hồi</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Đặt câu hỏi với chúng tôi</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Tuy hoà, Phú Yên, Việt Nam</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+84 92 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text"><span class="__cf_email__"
                                                data-cfemail="335a5d555c734a5c4641575c5e525a5d1d505c5e">myemail@gmail.com</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-darken">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}js/tiny-slider.js"></script>
    <script src="{{ asset('/') }}js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}js/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="{{ asset('/') }}js/google-map.js"></script>
    <script src="{{ asset('/') }}js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8aae985c588f20f9","version":"2024.7.0","serverTiming":{"name":{"cfL4":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}'
        crossorigin="anonymous"></script>
</body>

</html>
