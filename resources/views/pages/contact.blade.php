@include('layouts.app')
 

{{-- Nagigations --}}
@include('layouts.navigation')
 
 
        <!-- ========================= page-banner-section start ========================= -->
        <section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                            <h2 class="text-white">Contact US</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        <section class="contact-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="contact-item-wrapper">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Contact</h4>
                                            <p>+234 813 2822 2400</p>
                                            <p>info@mobiverio.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-map-marker"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Address</h4>
                                            <p>Hq El-rufai street, Chika airport-road </p>
                                            <p>FCT Abuja</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-alarm-clock"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Shedule</h4>
                                            <p>Monday - Saturday </p>
                                            <p>Office time: 8 AM - 5:30 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-form-wrapper">
                            <div class="row">
                                <div class="col-xl-10 col-lg-8 mx-auto">
                                    <div class="section-title text-center mb-50">
                                    
                                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Ready to Elevate Your Digital Presence?</h2>
                                        <p class="wow fadeInUp" data-wow-delay=".6s">Let's Innovate Together!</p>
                                    </div>
                                </div>
                            </div>
                            <form action="assets/php/mail.php" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="phone" id="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="subject" id="email" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <textarea name="message" id="message" placeholder="Type Message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="button text-center">
                                            <button type="submit" class="theme-btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->

        <!-- ========================= map-section end ========================= -->
        @include('components.call-to-actio')

 
        <!-- ========================= subscribe-section end ========================= -->
        @include('layouts.footer')