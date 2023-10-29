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
                        <div class="text">Sat - Thu: 10:00 am to 6:00 pm <br>Friday: CLOSED</div>
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
                        <h6 class="widget-title">Company</h6>
                        <div class="widget-content">
                            <ul class="user-links">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                <li><a href="{{ route('our.team') }}">Meet the Team</a></li>
                                <li><a href="{{ route('gallerys') }}">Gallerys</a></li>
                                <li><a href="{{ route('contect') }}">Contact</a></li>
                            </ul>                                
                        </div>
                    </div>
                </div>
                <!-- Footer COlumn -->
                <div class="footer-column col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <div class="widget links-widget">
                        <h6 class="widget-title">Importent</h6>
                        <div class="widget-content">
                            <ul class="user-links">
                                <li><a href="{{ route('services') }}">Our Services</a></li>
                                <li><a href="{{ route('our.blog') }}">Blogs</a></li>
                                <li><a href="{{ route('our.clients') }}">Clients</a></li>
                                <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                            </ul>                                
                        </div>
                    </div>
                </div>

                
                <!-- Footer COlumn -->
                <div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="widget newsletter-widget">
                        <h6 class="widget-title">Maps</h6>
                        <div class="widget-content">
                            <div class="subscribe-form">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.605716407397!2d90.34392157608612!3d23.761435688351174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf62a849eb65%3A0xecaf9eed4ef8451a!2sMilitary%20House!5e0!3m2!1sen!2sbd!4v1698583054908!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <div class="logo-column col-lg-5 col-md-5 order-2">
                    <div class="footer-logo"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""></div>
                </div>
                <div class="links-column col-lg-3 col-md-3 order-3">
                    <ul class="footer-links">
                       
                        <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                    </ul>
                    </div>
                <div class="col-lg-4 col-md-4">
                    <p class="copyright-text">{{ $setting->first()->footer }}  Design & Development by <a href="https://nugortech.com/" class="text-primary">Nugortechit</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>