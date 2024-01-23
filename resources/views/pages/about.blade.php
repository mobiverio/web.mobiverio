@include('layouts.app')
 

{{-- Nagigations --}}
@include('layouts.navigation')
 
 
        <!-- ========================= page-banner-section start ========================= -->
        <section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                            <h2 class="text-white">Company</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="{{route('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active"> Company</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

 
        <!-- ========================= feature-section end ========================= -->

     
        @include('components.about')
         


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