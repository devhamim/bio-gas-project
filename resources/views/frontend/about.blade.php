@extends('frontend.layout.app')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- About Section -->
@if ( $abouts->first() != null)
<section class="about-section pt-5">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">{{ $abouts->first()->subtitle }}</span>
                        <h2>{{ $abouts->first()->title }}</h2>
                        <div class="text">{!! $abouts->first()->description !!}</div>
                    </div>

                    <div class="other-info">
                        
                        <a href="{{ route('contect') }}" class="theme-btn btn-style-one dark-bg"><span class="btn-title">Contect Us</span></a>

                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="600ms">
                <div class="image-box">
                    <span class="icon-shpaes zoom-one"></span>
                    <figure class="image wow fadeIn"><img src="{{ asset('uploads/about') }}/{{ $abouts->first()->image }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- End About Section -->

<!-- Services Section Four -->
<section class="services-section-four">
    <div class="bg bg-pattern-13"></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">our services</span>
            <h2>Special Services</h2>
        </div>

        <div class="row">
            <!-- Service Block Four -->
            @foreach ($services->take(3) as $service)
            <div class="service-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a ><img src="{{ asset('uploads/service') }}/{{ $service->image }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon"><img src="{{ asset('uploads/service') }}/{{ $service->icon }}" alt=""></i>
                        <h5 class="title"><a>{{ $service->title }}</a></h5>
                        <div class="text">{{ $service->sort_desp }}</div>
                    </div>
                </div>
            </div>
            @endforeach
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
                @foreach ($clients as $client)
                    <li class="client-block"> <a><img src="{{ asset('uploads/client') }}/{{ $client->image }}" alt=""></a> </li>
                @endforeach

            </ul>
        </div>
    </div>
</section>
<!--End Clients Section -->


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
            @foreach ($teams->take(3) as $team)
            <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a><img src="{{ asset('uploads/team') }}/{{ $team->image }}" alt=""></a></figure>
                        
                    </div>
                    <div class="info-box">
                        <h5 class="name"><a title="">{{ $team->name }}</a></h5>
                        <span class="designation">{{ $team->post }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Team Section -->
@endsection