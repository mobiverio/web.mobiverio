{{-- App Full Configuration  --}}
@include('layouts.app')
 

{{-- Nagigations --}}
@include('layouts.navigation')
 
 
        <!-- ========================= hero-section start ========================= -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero-content-wrapper">
                            <h2 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Unleash Innovation : </h2>
                            <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Where Ideas Become Extraordinary Software Solutions!</h1>
                            <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                            <a href="javascript:void(0)" class="theme-btn">Request a quote</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="hero-img">
                            <div class="d-inline-block hero-img-right">
                                <img src="assets/img/hero/hero-img.png" alt="" class="image wow fadeInRight" data-wow-delay=".5s">
                                <img src="assets/img/hero/dots.shape.svg" alt="" class="dot-shape">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox"><i class="lni lni-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= hero-section end ========================= -->

            {{-- client-logo --}}
            @include('components.client-logo')


            {{-- Services --}}
            @include('components.service')

            
            {{-- Services --}}
            @include('components.process')


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
        <!--========================= about-section end========================= -->

         
        <!-- ========================= service-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
   @include('components.call-to-actio')
        <!-- ========================= contact-section end ========================= -->

        <!-- ========================= pricing-section start ========================= -->
  
        <!-- ========================= pricing-section end ========================= -->

        {{-- <!-- ========================= subscribe-section start ========================= -->
        <section class="subscribe-section pt-70 pb-70 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title mb-30">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Subscribe</span>
                            <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <form action="#" class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                            <input type="text" name="subs-email" id="subs-email" placeholder="Your Email">
                            <button type="submit"><i class="lni lni-telegram-original"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ========================= subscribe-section end ========================= -->
@include('layouts.footer')