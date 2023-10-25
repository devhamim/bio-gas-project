<footer class="main-footer">
    <div class="bg bg-pattern-6"></div>
    <!-- Footer Uppper -->
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row">
                <!-- Contact info Block -->
                <div class="contact-info-block col-lg-4 col-md-6">
                    <div class="inner">
                        <i class="icon lnr-icon-map"></i>
                        <div class="text">{{ $setting->first()->address }}</div>
                    </div>
                </div>
                <!-- Contact info Block -->
                <div class="contact-info-block col-lg-4 col-md-6">
                    <div class="inner">
                        <i class="icon lnr-icon-envelope1"></i>
                        <div class="text">
                            <a href="#">{{ $setting->first()->email }}</a>
                            <a href="tel:{{ $setting->first()->number }}">{{ $setting->first()->number }}</a>
                        </div>
                    </div>
                </div>
                <!-- Contact info Block -->
                <div class="contact-info-block col-lg-4 col-md-6">
                    <div class="inner">
                        <i class="icon lnr-icon-clock"></i>
                        <div class="text">Mon - Sat: 8:00 am to 6:00 pm <br>Sunday: CLOSED</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Widgets Section -->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!-- Footer COlumn -->
                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <h5 class="widget-title">About</h5>
                        <div class="widget-content">
                            <div class="text">{{ $setting->first()->about }}</div>
                            <ul class="social-icon-two">
                                <li><a href="{{ $setting->first()->twitter }}"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="{{ $setting->first()->facebook }}"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="{{ $setting->first()->linkedin }}"><span class="fab fa-linkedin"></span></a></li>
                                <li><a href="{{ $setting->first()->instagram }}"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Footer COlumn -->
                <div class="footer-column col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <div class="widget links-widget">
                        <h6 class="widget-title">Explore</h6>
                        <div class="widget-content">
                            <ul class="user-links">
                                <li><a href="{{ route('our.team') }}">Meet the Team</a></li>
                                <li><a href="{{ route('services') }}">Our Services</a></li>
                                <li><a href="{{ route('our.blog') }}">Blogs</a></li>
                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                <li><a href="{{ route('contect') }}">Contact</a></li>
                            </ul>                                
                        </div>
                    </div>
                </div>


                <!-- Footer COlumn -->
                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="widget gallery-widget">
                        <h6 class="widget-title">Projects</h6>
                        <div class="widget-content">
                            <div class="outer">
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-1.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-2.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-3.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-4.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-5.jpg" alt=""></a>
                                </figure>
                                <figure class="image">
                                    <a href="#"><img src="images/resource/project-thumb-6.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Footer COlumn -->
                <div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="widget newsletter-widget">
                        <h6 class="widget-title">Newsletter</h6>
                        <div class="widget-content">
                            <div class="text">Subscribe our newsletter to get our latest update & news</div>
                            <div class="subscribe-form">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
                                        <button type="button" class="theme-btn"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row">
                <div class="logo-column col-lg-4 col-md-4 order-2">
                    <div class="footer-logo"><img src="images/logo.png" alt=""></div>
                </div>
                <div class="links-column col-lg-4 col-md-4 order-3">
                    <ul class="footer-links">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <p class="copyright-text">{{ $setting->first()->footer }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>