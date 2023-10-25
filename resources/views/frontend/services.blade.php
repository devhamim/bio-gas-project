@extends('frontend.layout.app')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Services</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- Services Section Four -->
<section class="services-section-four bg-silver-light">
    <div class="auto-container">

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
@endsection