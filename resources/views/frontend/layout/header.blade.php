<header class="main-header header-style-one">
    <!-- Header Top -->
    <div class="header-top">
        <div class="inner-container">
    
            <div class="top-left">
                <!-- Info List -->
                <ul class="list-style-one">
                    @if ($setting->first()->email != null)
                        <li><i class="fa fa-envelope"></i> <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></li>
                    @endif
                    @if ($setting->first()->address != null)
                        <li><i class="fa fa-map-marker"></i>{{ $setting->first()->address }}</li>
                    @endif
                </ul>
            </div>
    
            <div class="top-right">
                
                <ul class="social-icon-one">
                    <li><a href="{{ $setting->first()->twitter }}"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="{{ $setting->first()->facebook }}"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="{{ $setting->first()->linkedin }}"><span class="fab fa-linkedin"></span></a></li>
                    <li><a href="{{ $setting->first()->instagram }}"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top -->
    
    <div class="header-lower">
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo"><a href="{{ url('/') }}"><img width="50%" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="" title="Tronis"></a></div>
            </div>


            <!--Nav Box-->
            <div class="nav-outer">    
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about_us') }}">About As</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('our.team') }}">Team</a></li>
                        <li><a href="{{ route('gallerys') }}">Gallery</a></li>
                        <li><a href="{{ route('our.clients') }}">Clients</a></li>
                        <li><a href="{{ route('our.blog') }}">Blogs</a></li>
                        <li><a href="{{ route('contect') }}">Contact</a></li>
                    </ul>
                </nav>
                <!-- Main Menu End-->
            </div>

            <div class="outer-box">
                <a href="tel:+92(8800)9806" class="info-btn">
                    <i class="icon flaticon-phone-ringing"></i>
                    {{ $setting->first()->number }}
                </a>
                <!-- Mobile Nav toggler -->
                <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
    
        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
    
            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:{{ $setting->first()->number }}">{{ $setting->first()->number }}</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Address</span>
                        {{ $setting->first()->address }}
                    </div>
                </li>
            </ul>
    
    
            <ul class="social-links">
                <li><a href="{{ $setting->first()->twitter }}"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="{{ $setting->first()->facebook }}"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="{{ $setting->first()->linkedin }}"><span class="fab fa-linkedin"></span></a></li>
                    <li><a href="{{ $setting->first()->instagram }}"><span class="fab fa-instagram"></span></a></li>
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
   
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="{{ url('/') }}" title=""><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt="" title=""></a>
                </div>
    
                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
    
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>