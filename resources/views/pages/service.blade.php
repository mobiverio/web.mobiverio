@include('layouts.app')
 

{{-- Nagigations --}}
@include('layouts.navigation')
 
 
        <!-- ========================= page-banner-section start ========================= -->
        <section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                            <h2 class="text-white">Our Best Services</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Service</li>
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

            
        <!-- ========================= service-section end ========================= -->

        <!-- ========================= carousel-section end ========================= -->
        <section class="carousel-section-wrapper">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-section carousel-item active clip-bg pt-225 pb-200 img-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">Create Stunning Websites in Easier
                                                and Effecient Way!</h2>
                                            <p class="text-white">We Crafted an awesome design library that is
                                                robust and intuitive to use. No matter you're building a business
                                                presentation
                                                websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href="javascript:void(0)" class="theme-btn border-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-section carousel-item clip-bg pt-225 pb-200 img-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10 mx-auto">
                                    <div class="carousel-content text-center">
                                        <div class="section-title">
                                            <h2 class="text-white">We Crafted an awesome design library that is
                                                robust and intuitive to use.</h2>
                                            <p class="text-white">Create Stunning Websites in Easier
                                                and Effecient Way! No matter you're building a business
                                                presentation websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href="javascript:void(0)" class="theme-btn border-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control carousel-control-prev" href="#carouselExampleCaptions" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <i class="lni lni-arrow-left"></i>
                    </span>
                </a>
                <a class="carousel-control carousel-control-next" href="#carouselExampleCaptions" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <i class="lni lni-arrow-right"></i>
                    </span>
                </a>
            </div>
        </section>
        <!-- ========================= carousel-section end ========================= -->

    
        <!-- ========================= pricing-section end ========================= -->


        @include('components.call-to-actio')

        <!-- ========================= contact-section end ========================= -->



 
        <!-- ========================= subscribe-section end ========================= -->
        @include('layouts.footer')