@extends('layouts.depan')
@section('content')
<section class="feedback-area section-gap relative" id="head">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row feedback-contents justify-content-center align-items-center">
            <div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
                <div class="overlay overlay-bg"></div>
            </div>
            <div class="col-lg-6 feedback-right text-center" style="margin-left:5px;">
                <h1 class="text-white">Aplikasi Pemetaan Rambu Lalu-lintas</h1>
                <h4>Area Dishub Kab. Tegal</h4>
                <br>
                <a class="primary-btn" href="#laporan_masyarakat">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- End feedback Area -->
<!-- Start home-about Area -->
<section class="home-about-area section-gap aboutus-about" id="laporan_masyarakat">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 col-md-12 col-xs-12 home-about-left">
                <h6>Laporan Langsung Masyarakat</h6>
                <h1>
                    Anda Mempunyai Saran Maupun <br>
                    Permintaan Rambu Lalulintas?
                </h1>
                <p class="sub">Aplikasi ini Memudahkan Anda dalam melaporkan langsung pada pihak kami</p>
                <p class="pb-20">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim.
                </p>
                <a class="primary-btn" href="/pemetaan-rambu/laporan_masyarakat">Kirim Permintaan dan Masukan</a>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12 relative">
                <img class="img-fluid single-project" src="/depan/img/form.jpg" alt="" width="500">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- Start cat Area -->
<section class="cat-area section-gap aboutus-cat" id="feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-cat d-flex flex-column">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span
                                class="lnr lnr-construction"></span></span></a>
                    <h4 class="mb-20" style="margin-top: 23px;">Rehabilitasi</h4>
                    <p>
                        Dinas Pehubungan mempunyai program rehabilitasi rambu lalu lintas dan lampu peringatan jalan
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span
                                class="lnr lnr-map-marker"></span></span></a>
                    <h4 class="mt-40 mb-20">Pengadaan Rambu</h4>
                    <p>
                        Dians Perhubungan memiliki program pengadaan rambu lalu-lintas setiap tahunnya
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span
                                class="lnr lnr-location"></span></span></a>
                    <h4 class="mt-40 mb-20">Pengadaan Sarpras Lalin </h4>
                    <p>
                        Dinas Perhubungan juga memiliki program pengadaan sarana prasarana lalu lintas yang lain seperti
                        lampu Peringatan,Cermin Cembung dan Lain-lain
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End cat Area -->

<!-- Start project Area -->
<section class="project-area section-gap" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">Foto Kegiatan</h1>
                <p>
                    para petugas survey langsung kelapangan untuk mengetahui kondisi
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <a href="./public/images/p1.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="./public/images/p1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="./public/images/p2.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="./public/images/p2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="./public/images/p3.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="./public/images/p3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="./public/images/p4.jpg" class="img-gal">
                    <img class="img-fluid single-project" src="./public/images/p4.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End project Area -->
<!-- Start feedback Area -->
<section class="feedback-area aboutus-feedback section-gap" id="feedback">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-60 header-text text-center">
                <h1 class="mb-10">Enjoy our Client’s Feedback</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>
        <div class="row feedback-contents justify-content-center align-items-center">
            <div class="col-lg-6 feedback-left2 relative d-flex justify-content-center align-items-center">
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid"
                        src="./public/depan/img/play-btn.png" alt=""></a>
            </div>
            <div class="col-lg-6 feedback-right">
                <div class="active-review-carusel">
                    <div class="single-feedback-carusel">
                        <div class="title d-flex flex-row">
                            <h4 class="pb-10">Fannie Rowe</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                            scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-feedback-carusel">
                        <div class="title d-flex flex-row">
                            <h4 class="pb-10">Fannie Rowe</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                            scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-feedback-carusel">
                        <div class="title d-flex flex-row">
                            <h4 class="pb-10">Fannie Rowe</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked	"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                            scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
