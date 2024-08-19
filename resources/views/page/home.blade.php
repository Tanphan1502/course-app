@extends('layout')
@section('title')
    Trang chủ
@endsection
@section('body')
    <!-- START BANNER  -->
    <section class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-5">
                    <div class="text mt-5 pt-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <span class="subheading">Khoá Học</span>
                        <h1 class="mb-4"> Tăng Cân An Lành</h1>
                        <p class="mb-4">Ngoại hình đẹp - là chìa khoá mở ra vô vàn thành công trong cuộc sống ngày nay.
                            <br>"Tình yêu, sự nghiệp, mối quan hệ" - không có cái nào là không cần ngoại hình!</br>
                            Nếu bạn đã tìm nhiều cách nhưng vẫn không cải thiện được thân hình gầy gò, thì khoá học tăng cân
                            an lành này có lẽ là sự lựa chọn tuyệt vời dành cho bạn !
                        </p>
                        <p><a href="#" class="btn btn-primary p-4 py-3">Đăng kí ngay! <span
                                    class="ion-ios-arrow-round-forward"></span></a> <a href="#"
                                class="btn btn-white p-4 py-3">Xem khoá học
                                <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER -->

    {{-- START SELF INTRODUCE  --}}
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-xl-5">
                <div class="mt-0 my-lg-5 py-5">
                    <span class="subheading"
                        style="font-size: 16px;display: block; margin-bottom: 5px;color: #1eb2a6;font-weight: 700; text-transform: uppercase;">Giới
                        thiệu</span>
                    <h2 class="mb-2"> Minh Triết- Mình là ai ?</h2>
                    <p>(Tui từng là .... các bạn !)</p>
                    <div class="row mt-4 g-lg-2">
                        <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                {{-- <div class="icon"><span class="flaticon-online-learning"></span></div> --}}
                                <div class="text">
                                    <p class="mb-0">Video</p>
                                </div>
                            </div>
                        </div>
                        <p>Bước Ngoặt Cuộc Đời Của Tui..!!</p>
                        <div class="row mt-4 g-lg-2">
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    {{-- <div class="icon"><span class="flaticon-online-learning"></span></div> --}}
                                    <div class="text">
                                        <p class="mb-0">Ảnh trước sau tăng cân</p>
                                    </div>
                                </div>
                            </div>
                            <p>Không thể để bản thân như vậy mãi được, mình còn chán mình thì nói gì ai ưa mình nổi.
                                Bởi vậy tui đã dành ra 6 nălm trời tìm hiểu, học hành về sức khoẻ: thực dưỡng, ăn thô, các
                                phương pháp chữa lành/thải độc tự nhiên, các nguyên nhân gầy và cách giải quyết nó.<br>

                                … Và chỉ có cách như vậy mới giúp tôi có được cân nặng mà mình mong muốn và cũng nhờ nó mà
                                tui đã giúp được cho HÀNG NGÀN bạn khán giả của mình thay đổi được vóc dáng và sức khoẻ, mà
                                họ đã từng ngỡ rằng…cuộc đời họ chẳng thể thay đổi được!

                            </p>
                            {{-- <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="flaticon-certificate"></span></div>
                                <div class="text">
                                    <h2>Earn A Certificates</h2>
                                    <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                        Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="flaticon-scientist"></span></div>
                                <div class="text">
                                    <h2>Learn with Expert</h2>
                                    <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                        Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    {{-- <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img w-100" style="background-image: url(images/about.jpg);">
                    </div>
                </div> --}}
                    {{-- <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <span class="subheading">Giới thiệu</span>
                        <h2 class="mb-2"> Minh Triết- Mình là ai ?</h2>
                        <div class="row mt-4 g-lg-2">
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-online-learning"></span></div>
                                    <div class="text">
                                        <h2>Online Courses</h2>
                                        <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                            Vokalia and
                                            Consonantia, there live the blind texts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-certificate"></span></div>
                                    <div class="text">
                                        <h2>Earn A Certificates</h2>
                                        <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                            Vokalia and
                                            Consonantia, there live the blind texts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-scientist"></span></div>
                                    <div class="text">
                                        <h2>Learn with Expert</h2>
                                        <p class="mb-0">Far far away, behind the word mountains, far from the countries
                                            Vokalia and
                                            Consonantia, there live the blind texts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
    </section>
    {{-- END SELF INTRODUCE   --}}



    <!-- START MIDDLE BANNER -->
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
                            <span class="caption">Khách hàng đã được giúp đỡ</span>
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
                            <span class="caption">Khách hàng đang tham gia</span>
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
                            <span class="caption">Đã lên lịch</span>
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
                            <span class="caption">Số lượng khoá học</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END MIDDLE BANNER -->
    <!-- START GUEST COMMENT BLOCK -->
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">khách hàng của chúng tôi
                    </span>
                    <h2 class="mb-5">Một Vài Trường Hợp Khó Mà Mình Đã Hỗ Trợ</h2>
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
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left">
                                            </div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left">
                                            </div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left">
                                            </div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left">
                                            </div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-quote-left">
                                            </div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mb-4 msg">… Đây chỉ là một vài trường hợp trong số hàng ngàn bạn mà Triết đã hỗ trợ trong 3 năm
                    qua thông qua kênh tiktok của mình</p>
                <div class="services d-flex">
                    {{-- <div class="icon"><span class="flaticon-online-learning"></span></div> --}}
                    <div class="text">
                        <p class="mb-0">Ảnh kênh tiktok</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GUEST COMMENT BLOCK -->
    <!-- START INTRODUCE COURSE BLOCK -->
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-xl">
            <div class="row g-xl-5">
                <p>[ĐIỀU ĐẶC BIỆT]
                    -> Bạn không cần mất 6 năm như mình để tìm hiểu về tăng cân, mà chỉ cần 3 NGÀY để học lại những kiến
                    thức trong ngần ấy năm đó của mình.

                    … Đương nhiên, mình chỉ hướng dẫn những cái cần thiết và dễ hiểu cho bạn, chứ bắt bạn học hết chắc ngáo
                    luôn á! 🙂
                    ……….
                </p>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <h2 class="mb-2"> Khoá Học Tăng Cân An Lành Này Gồm Những Gì?</h2>
                        {{-- <span class="subheading">Giới thiệu</span> --}}
                        <div class="row mt-4 g-lg-2">
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-online-learning"></span></div>
                                    <div class="text">
                                        <h2>Bước 1 :<br> Tư Duy Tăng Cân An Toàn, Bền Vững</br></h2>
                                        <p class="mb-0"> Muốn thành công một cái gì đó ngon lành, thì ban đầu
                                            cần phải có tư duy cho nó đúng, cái này nói nghe giống đa cấp nhưng thật sự quan
                                            trọng để tránh các bạn đi sai hướng rồi lại mất thời gian, mất tiền, và đặc biệt
                                            là mất sức khoẻ.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-certificate"></span></div>
                                    <div class="text">
                                        <h2>Bước 2 :<br> Tìm Nguyên Nhân Khiến Bạn Gầy</br></h2>
                                        <p class="mb-0">Muốn trị bệnh phải chẩn đoán bệnh trước, bị sổ mũi mà cho thuốc
                                            tiêu chảy là hông được rồi. Nên bước tìm nguyên nhân cũng không thể bỏ qua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-scientist"></span></div>
                                    <div class="text">
                                        <h2>Bước 3 :<br> Giải Quyết Nguyên Nhân Gầy Của Bạn.</br></h2>
                                        <p class="mb-0">Cách đỡ mất thời gian nhất khi tăng cân là “gãi đúng chỗ ngứa” mà
                                            bạn bị. Nếu đang gầy do chán ăn, thì trị chán ăn, nếu hấp thu kém thì cải thiện
                                            hấp thu, nếu do lối sống thì áp dụng các mẹo thay đổi lối sống tốt hơn…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <div class="row mt-4 g-lg-2">
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-online-learning"></span></div>
                                    <div class="text">
                                        <h2>Bước 4:
                                            <br> Lối Sống Chuẩn Để Tăng cân.
                                            </br>
                                        </h2>
                                        <p class="mb-0"> Hơi lằng nhằng nhưng bước này bạn cần nắm được để biết cách sinh
                                            hoạt sao cho chuẩn, từ giờ giấc ăn ngủ, uống nước, bữa phụ, tập thể dục…
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-certificate"></span></div>
                                    <div class="text">
                                        <h2>Bước 5 :<br> Giải Quyết Nguyên Nhân Gầy.</br></h2>
                                        <p class="mb-0">Đây là “trùm cuối” giúp giải quyết những lý do khiến bạn ốm: bao
                                            gồm cách trị biếng ăn, cách tăng hấp thu, cải thiện đường tiêu hoá…
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-scientist"></span></div>
                                    <div class="text">
                                        <h2>Bước 6 :<br>Cách Chọn Thực Phẩm Tăng Cân An Lành.</br></h2>
                                        <p class="mb-0">Đây là “trùm cuối” giúp giải quyết những lý do khiến bạn ốm: bao
                                            gồm cách trị biếng ăn, cách tăng hấp thu, cải thiện đường tiêu hoá…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-stretch services-wrap">
                                <div class="services d-flex">
                                    <div class="icon"><span class="flaticon-scientist"></span></div>
                                    <div class="text">
                                        <h2>Bước 7 :<br>Cách Tập Luyện Tăng Cân Không Cần Nỗ Lực.
                                            </br></h2>
                                        <p class="mb-0">Sai lầm của chúng ta là “tập nặng, tập nhiều mới tăng cân”. Hông!
                                            mình sẽ hướng dẫn các bạn tập rất đơn giản, nhẹ nhàng, không mất quá 30 phút
                                            nhưng lại cực kì hiệu quả để tăng cân.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul>
            <li>…7 Bước trên đã quá đủ cho “cuộc tình” này rồi!, ngoài ra các bạn còn được tặng thêm:</li>

            <li>-> Hỗ trợ trực tiếp, kèm 1-1 trong 6 tháng trong zalo riêng với mình.</li>
            <li> -> Thực đơn “tăng cân an lành”, đủ dinh dưỡng nhưng đơn giản.
            </li>
            <li> -> Mẹo đi chợ/ăn tiệm lành mạnh, bảo vệ sức khoẻ, bảo vệ cân nặng của bạn.</li>
        </ul>




    </section>
    <!-- END INTRODUCE COURSE BLOCK -->

    <!-- START COURSE PACKAGE BLOCK -->
    <section class="ftco-section courses-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-10 text-center heading-section" data-aos="fade-up">
                    <span class="subheading">Our Courses</span>
                    <h2 class="mb-5"> Khoá Học Tăng Cân An Lành Này Dành Cho Ai?
</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-git aos-delay="100" data-aos-duration="1000">
                    <div class="carousel-courses">
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-engineer"></span></div>
                                    <div class="text">
                                        <h2>Basic Fundamentals for Software Engineering</h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img" style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-design"></span></div>
                                    <div class="text">
                                        <h2>Enhancing Adobe Photoshop CC 2020 Skills</h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img" style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-algorithm"></span></div>
                                    <div class="text">
                                        <h2>HTML, CSS, and Javascript for Web Developers</h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img" style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="courses">
                                <div class="d-flex">
                                    <div class="icon"><span class="flaticon-coding"></span></div>
                                    <div class="text">
                                        <h2>Introducing to Programming with WordPress </h2>
                                        <p class="rate">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span>(5.0)</span>
                                        </p>
                                        <div class="author-wrap d-flex align-items-center">
                                            <div class="img" style="background-image: url(images/author-1.jpg);"></div>
                                            <span class="author">by John Smith</span>
                                        </div>
                                        <p class="lec"><a href="#">50 lectures (190 hrs)</a></p>
                                    </div>
                                </div>
                                <div class="text-center bg-light rounded py-2 my-3">
                                    <p class="course-price mb-0"><span>$100 All Course</span> / <span>$15 per month</span>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="btn d-block btn-primary btn-outline-primary py-3">Enroll
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COURSE PACKAGE BLOCK -->



    <!-- START  BLOG -->
    <section class="ftco-section bg-light ftco-no-pt">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Bài viết</span>
                    <h2>Bài viết gần đây</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 18, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Build your Dream Software &amp; Engineering
                                    Career</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 18, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Build your Dream Software &amp; Engineering
                                    Career</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text">
                            <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i
                                        class="fa fa-calendar me-1"></i>Jan. 18, 2021</span> <span><a href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                            <h3 class="heading mb-3"><a href="#">Build your Dream Software &amp; Engineering
                                    Career</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <!-- START PACKAGE SUBSCRIBE BLOCK -->
    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Pricing</span>
                    <h2 class="mb-3">Pricing &amp; <span>Packages</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Basic Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">49K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live
                                    the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get
                                Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Beginner Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">79K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live
                                    the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get
                                Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Premium Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">109K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live
                                    the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get
                                Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="block-7">
                        <div class="text-center">
                            <span class="excerpt d-block">Ultimate Plan</span>
                            <span class="price"><sup>$</sup> <span class="number">149K</span></span>
                            <div class="p-4 px-lg-5">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live
                                    the blind texts.</p>
                            </div>
                            <a href="#" class="btn btn-primary btn-outline-primary d-block px-2 py-3">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PACKAGE SUBSCRIBE BLOCK -->
@endsection
