@extends('frontend.layout.app')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- About Section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">Welcome to disle</span>
                        <h2>Introducing Quality Digital Agency.</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn.</div>
                    </div>
                    <ul class="list-style-two">
                        <li><i class="fal fa-check-circle"></i> Nsectetur cing elit.</li>
                        <li><i class="fal fa-check-circle"></i> Suspe ndisse suscipit sagittis leo.</li>
                        <li><i class="fal fa-check-circle"></i> Entum estibulum dignissim posuere.</li>
                    </ul>

                    <div class="other-info">
                        <div class="info-box">
                            <i class="icon flaticon-phone-ringing"></i>
                            <span class="title">Get a free Quote</span>
                            <a href="tel:+92(8800)36780" class="info-text">+92 (8800) 36780</a>
                        </div>

                        <div class="founded-year">
                            <i class="icon flaticon-trophy"></i>
                            <h6 class="title">Since <br > 2016</h6>
                        </div>

                        <a href="page-about.html" class="theme-btn btn-style-one dark-bg"><span class="btn-title">Discover more</span></a>

                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="600ms">
                <div class="image-box">
                    <span class="icon-shpaes zoom-one"></span>
                    <figure class="image wow fadeIn"><img src="images/resource/about-1.png" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Services Section Four -->
<section class="services-section-four">
    <div class="bg bg-pattern-13"></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">our services</span>
            <h2>Special Digital Services</h2>
        </div>

        <div class="row">
            <!-- Service Block Four -->
            <div class="service-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="page-service-details.html"><img src="{{ asset('frontend') }}/images/resource/service2-1.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-front-end"></i>
                        <h5 class="title"><a href="page-service-details.html">Website <br>Development</a></h5>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    </div>
                </div>
            </div>
            
            <!-- Service Block Four -->
            <div class="service-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="page-service-details.html"><img src="{{ asset('frontend') }}/images/resource/service2-2.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-television"></i>
                        <h5 class="title"><a href="page-service-details.html">Graphic <br>Designing</a></h5>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    </div>
                </div>
            </div>

            <!-- Service Block Four -->
            <div class="service-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="page-service-details.html"><img src="{{ asset('frontend') }}/images/resource/service2-3.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-android-logo"></i>
                        <h5 class="title"><a href="page-service-details.html">Application <br>Development</a></h5>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    </div>
                </div>
            </div>

            <!-- Service Block Four -->
            <div class="service-block-four col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="page-service-details.html"><img src="{{ asset('frontend') }}/images/resource/service2-4.jpg" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon flaticon-web-1"></i>
                        <h5 class="title"><a href="page-service-details.html">Digital <br>Marketing</a></h5>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End services-section Two-->

<!-- Clients Section -->
<section class="clients-section">
    <div class="auto-container">
        <hr class="divider">
        <!-- Sponsors Outer -->
        <div class="sponsors-outer">
            <!--clients carousel-->

            <ul class="clients-carousel owl-carousel owl-theme">

                <li class="client-block"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a> </li>

                <li class="client-block"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a> </li>

                <li class="client-block"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a> </li>

                <li class="client-block"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a> </li>

                <li class="client-block"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a> </li>

            </ul>
        </div>
    </div>
</section>
<!--End Clients Section -->

 <!-- Why Choose Us -->
<section class="why-choose-us-two">
    <div class="bg bg-pattern-11"></div>

    <div class="auto-container">
        <div class="row">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">Why choose us</span>
                        <h2> Easy & Fastest Build <br>your Website.</h2>
                    </div>

                    <div class="image-box">
                        <figure class="image-2"><img src="{{ asset('frontend') }}/images/resource/why-us-2.png" alt=""></figure>
                        <figure class="image-1"><img src="{{ asset('frontend') }}/images/resource/why-us-1.png" alt=""></figure>
                    </div>
                </div>
            </div>

            <!-- Features Column -->
            <div class="features-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="row">
                        <!-- Feature Block Three -->
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <div class="title-box">
                                    <i class="icon fa fa-user-group"></i>
                                    <h5 class="title">Latest Technology</h5>
                                </div>
                                <div class="text">Sed quia magni doles eos qui ration volupta tem sequi nesciunt eque porro.</div>
                            </div>
                        </div>

                        <!-- Feature Block Three -->
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <div class="title-box">
                                    <i class="icon fa fa-user-group"></i>
                                    <h5 class="title">Certified Experts</h5>
                                </div>
                                <div class="text">Sed quia magni doles eos qui ration volupta tem sequi nesciunt eque porro.</div>
                            </div>
                        </div>

                        <!-- Feature Block Three -->
                        <div class="feature-block-three">
                            <div class="inner-box">
                                <div class="title-box">
                                    <i class="icon fa fa-user-group"></i>
                                    <h5 class="title">Get Reasonable Price</h5>
                                </div>
                                <div class="text">Sed quia magni doles eos qui ration volupta tem sequi nesciunt eque porro.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end-benifet-sec -->

<!-- Team Section -->
<section class="team-section">
    <div class="bg bg-pattern-4"></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">professional people</span>
            <h2>Meet Our Expert Team <br>Members.</h2>
        </div>
        
        <div class="row">
            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="page-team-details.html"><img src="{{ asset('frontend') }}/images/resource/team-1.jpg" alt=""></a></figure>
                        <span class="share-icon fa fa-share-alt"></span>
                        <ul class="social-links">
                            <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h5 class="name"><a href="page-team-details.html" title="">Mike Hardson</a></h5>
                        <span class="designation">designer</span>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="page-team-details.html"><img src="{{ asset('frontend') }}/images/resource/team-2.jpg" alt=""></a></figure>
                        <span class="share-icon fa fa-share-alt"></span>
                        <ul class="social-links">
                            <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h5 class="name"><a href="page-team-details.html" title="">Aleesha Brown</a></h5>
                        <span class="designation">designer</span>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="page-team-details.html"><img src="{{ asset('frontend') }}/images/resource/team-3.jpg" alt=""></a></figure>
                        <span class="share-icon fa fa-share-alt"></span>
                        <ul class="social-links">
                            <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h5 class="name"><a href="page-team-details.html" title="">Kevin Martin</a></h5>
                        <span class="designation">designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->
@endsection