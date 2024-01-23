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
                            {{-- <h2 class="mb-25 wow fadeInDown" data-wow-delay=".9s">Moboverio </h2> --}}
                            <h1 class="mb-25 wow fadeInDown" data-wow-delay=".4s">Where Ideas Become Extraordinary Software Solutions!</h1>
                            <p class="mb-35 wow fadeInLeft" data-wow-delay=".9s">We are Africa Award winning software solution company We turn your idea into reality</p>
                            <a href="javascript:void(0)" style="border-radius: 10px" class="theme-btn">Request a Discovery call</a>
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


        @include('components.about')
         
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