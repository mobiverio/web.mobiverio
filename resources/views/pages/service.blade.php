@include('layouts.app')
 

{{-- Nagigations --}}
@include('layouts.navigation')
 
 
        <!-- ========================= page-banner-section start ========================= -->
        <section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                            <h2 class="text-white">Our Services</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="{{route('/')}}">Home</a></li>
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
                                            <h2 class="text-white">Elevate Your Business Today!</h2>
                                            <p class="text-white">Take the leap into the future with our transformative technology solutions. Whether it's enhancing efficiency, improving user experiences, or staying ahead in the competitive landscape – we're your partner in digital transformation.</p>
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
                                            <h2 class="text-white">Ignite Innovation: Discover Cutting-Edge Solutions Now!</h2>
                                            <p class="text-white">Explore our portfolio of innovative software solutions designed to propel your business forward. From bespoke applications to advanced tech integrations, we're here to redefine what's possible in the digital realm.</p>
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