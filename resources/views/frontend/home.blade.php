@extends('frontend.layout.app')

@section('content')
<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <!-- Slide 1 -->
                @foreach ($banners as $banner)
                <li data-index="rs-1" data-transition="zoomout">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('uploads/banner') }}/{{ $banner->image }}" alt="" class="rev-slidebg">

                    <div class="tp-caption"
                    data-paddingbottom="[15,15,15,15]"
                    data-paddingleft="[15,15,15,15]"
                    data-paddingright="[15,15,15,15]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['900','900','750','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-20','-20','-20','0']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h1>{{ $banner->title }}</h1>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[15,15,15,15]"
                    data-paddingleft="[15,15,15,15]"
                    data-paddingright="[15,15,15,15]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['750','750','750','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['105','105','105','105']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <p class="text">{{ $banner->description }}</p>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[15,15,15,15]"
                    data-paddingright="[15,15,15,15]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text" data-height="none"
                    data-width="['700','750','700','450']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['180','180','180','200']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <a href="{{ route('services') }}" class="theme-btn btn-style-one hover-light"><span class="btn-title">Service</span></a>
                        <a href="{{ route('contect') }}" class="theme-btn btn-style-one hover-light"><span class="btn-title">Contect</span></a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- End Main Slider-->

<!-- Features Section -->
<section class="features-section">
    <div class="bg bg-pattern-1"></div>
    <div class="auto-container">

        <div class="row">
            <!-- Feature Block -->
            @foreach ($achieves->take(3) as $achieve)
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">

                    <div class="content-box">
                        <h2 class="pt-3">{{ $achieve->total }}</h2>
                        <h5 class="title pb-4">{{ $achieve->title }}</h5>
                        <div class="icon-box"><i><img src="{{ asset('uploads/achieve') }}/{{ $achieve->icon }}" alt=""></i></div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Features Section -->

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
                        <a href="{{ route('about_us') }}" class="theme-btn btn-style-one dark-bg"><span class="btn-title">About Us</span></a>
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

<!-- Services Section -->
<section class="services-section">
    <div class="bg bg-pattern-2"></div>
    <div class="auto-container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-7">
                    <span class="sub-title">our services</span>
                </div>

            </div>
        </div>

        <div class="row">
            <!--  Services Column -->
            <div class="services-column col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
                <div class="inner-column">
                    <div class="row">
                        <!-- Service Block -->
                        @foreach ($services->take(6) as $sl=>$service)
                        <div class="service-block col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="count">{{ $sl+1 }}</span>
                                    <i ><img class="py-3" src="{{ asset('uploads/service') }}/{{ $service->icon }}" alt=""></i>
                                </div>
                                <h5 class="title py-3"><a>{{ $service->title }}</a></h5>
                                <p>{{ $service->sort_desp }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End services-section-->

<!-- Projects Section -->
<section class="projects-section pb-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">Gallery</span>
        </div>

        <div class="outer-box">
            <div class="row">
                <!-- Project Block -->
                @foreach ($gallerys as $gallery)
                <div class=" project-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a class="my-image-links" data-maxwidth="50%" data-gall="gallery01" href="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"><img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"></a>
                            </figure>
                        </div>
                        <div class="content-box">
                            <a  class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                            <span class="cat">{{ $gallery->address }}</span>
                            <h4 class="title"><a  title="">{{ $gallery->title }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--End projects-section-->

<!-- Clients Section -->
<section class="clients-section pull-up">
    <div class="auto-container">
        <!-- Sponsors Outer -->
        <div class="sponsors-outer">
            <!--clients carousel-->

            <ul class="clients-carousel owl-carousel owl-theme">
                @foreach ($clients as $client)
                    <li class="client-block"> <a ><img src="{{ asset('uploads/client') }}/{{ $client->image }}" alt=""></a> </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section -->


<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="bg bg-lines"></div>
    <div class="auto-container">
        <div class="row">
            <!-- Title Column -->
            <div class="title-column col-lg-5 col-md-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">Client Feedback</span>
                        <h2>What They’re Talking About us.</h2>
                    </div>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="testimonial-column col-lg-7 col-md-12">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel default-navs">
                        <!-- Testimonial Block -->
                        @foreach ($customerSays as $customerSay)
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="content-box">
                                    <div class="text">{!! $customerSay->description !!}</div>
                                </div>
                                <div class="info-box">
                                    <figure class="thumb"><img src="{{ asset('uploads/customersay') }}/{{ $customerSay->image }}" alt=""></figure>
                                    <h5 class="name">{{ $customerSay->name }}</h5>
                                    <span class="designation">{{ $customerSay->post }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->

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
            @foreach ($teams as $team)
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

<!-- Contact Section -->
<section class="contact-section">
    <div class="bg-outer">
        <div class="bg bg-pattern-5"></div>
    </div>
    <div class="auto-container">
        <div class="row">
            <!-- Contact Column -->
            <div class="contact-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="sub-title">contact us</span>
                        <h2>Drop us a Line.</h2>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form wow fadeInLeft">
                        <!--Contact Form-->
                        <form method="POST" action="{{ route('customerMessage.store') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                </div>

                                <div class="form-group col-lg-12">
                                    <textarea name="message" placeholder="Write message" required>{{ old('message') }}</textarea>
                                </div>

                                <div class="form-group col-lg-12">
                                    <button class="theme-btn btn-style-one" type="submit"><span class="btn-title">Send a message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Contact Form -->
                </div>

                <div class="contact-info">
                    <span class="title">Call us anytime:</span>
                    @if ($settings->first()->number != null)
                        <a href="tel:{{ $settings->first()->number }}" class="info">{{ $settings->first()->number }}</a>
                    @endif
                </div>
            </div>

            <!-- Map Column -->
            <div class="map-column col-lg-4 col-md-12">
                <div class="inner-column">
                    <iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">From the Blog</span>
            <h2>Latest News & <br>Articles from the Blog.</h2>
        </div>

        <div class="row">
            <!-- News Block -->
            @foreach ($blogs->take(3) as $blog)
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a></figure>
                        <span class="date">{{ $blog->created_at->format('d,M,Y') }}</span>
                    </div>
                    <div class="content-box">
                        @if ($blog->added_by != null)
                        <div class="author-info">   
                            @if ($blog->rel_to_user->image != null)
                                <div class="author-thumb"><img src="{{ asset('uploads/users') }}/{{ $blog->rel_to_user->image }}" alt=""></div>
                            @endif    
                            <span class="author-name">{{ $blog->rel_to_user->name }}</span>
                        </div>
                        @endif
                        <h5 class="title"><a href="{{ route('our.blog.details', $blog->slug) }}" title="">{{ $blog->title }}</a></h5>
                        <ul class="post-info">
                            <li class="read-more"><a href="{{ route('our.blog.details', $blog->slug) }}" title=""><i class="fa fa-long-arrow-alt-right"></i> More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
