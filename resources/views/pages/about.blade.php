@include('layouts.app')
 

{{-- Nagigations --}}
@include('layouts.navigation')
 
 
        <!-- ========================= page-banner-section start ========================= -->
        <section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                            <h2 class="text-white">About Company</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

 
            {{-- Services --}}
            @include('components.service')

            
        <!-- ========================= feature-section end ========================= -->

        <!--========================= about-section start========================= -->
        <section id="about" class="pt-100">
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="assets/img/about/about-img.png" alt="">

                                    <div class="about-experience">
                                        <h3>5 Year Of Working Experience</h3>
                                        <p>We Crafted an aweso design library that is robust and intuitive to use.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">About Us</span>
                                    <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Built-With Boostrap 5, a New Experiance</h2>
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">We Crafted an awesome design library
                                        that is robust and intuitive to use. No matter you're building a business
                                        presentation websit or a complex web application our design</p>
                                    <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-1" cup-end="30" cup-append="k">10</span>
                                            <h4>Happy Client</h4>
                                            <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                        </div>
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-2" cup-end="42" cup-append="k">5</span>
                                            <h4>Project Done</h4>
                                            <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
           {{-- Teams --}}
           @include('components.team')
        <!--========================= about-section end========================= -->

        @include('components.call-to-actio')

        <!-- ========================= client-logo-section start ========================= -->
        <section class="client-logo-section pt-100 pb-130">
            <div class="container">
                <div class="client-logo-wrapper">
                    <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                        <div class="client-logo">
                            <img src="assets/img/client-logo/uideck-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/pagebulb-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/graygrids-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= client-logo-section end ========================= -->

    
        <!-- ========================= subscribe-section end ========================= -->
        @include('layouts.footer')