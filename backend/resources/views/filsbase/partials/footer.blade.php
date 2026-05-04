    <!-- Footer Start -->
    <footer class="main-footer">
        <!-- Footer Scrolling Ticker Box Start -->
        <div class="footer-scrolling-ticker-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Scrolling Ticker Start -->
                        <div class="footer-scrolling-ticker">
                            <!-- Scrolling Ticker Box Start -->
                            <div class="scrolling-ticker-box">
                                <!-- Scrolling Ticker Content Start -->
                                <div class="scrolling-content">
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                </div>
                                <!-- Scrolling Ticker Content End -->
            
                                <!-- Scrolling Ticker Content Start -->
                                <div class="scrolling-content">
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                    <span><img src="{{ asset('frontend-images/icon-asterisk.svg') }}" alt=""> Let's  Work Together</span>
                                </div>
                                <!-- Scrolling Ticker Content End -->
                            </div>
                            <!-- Scrolling Ticker Box End -->
            
                            <!-- Footer Contact Button Start -->
                            <div class="footer-contact-btn">
                                <a href="{{ route('filsbase.contact') }}" class="schedule-btn">Contact Us <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt=""></a>
                            </div>
                            <!-- Footer Contact Button End -->
                        </div>
                        <!-- Footer Scrolling Ticker End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Scrolling Ticker Box End -->
        
		<div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('logo footer.png') }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>Building powerful digital solutions that help your business grow and thrive in the digital age.</p>
                        </div>
                        <!-- About Footer Content End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Footer Location Link Start -->
                    <div class="footer-location footer-links">
                        <h3>Our Location</h3>
                        <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </div>
                    <!-- Footer Location Link End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Footer Contact Start -->
                    <div class="footer-contact footer-links">
                        <h3>Contact Information</h3>
                        <ul>
                            <li><a href="tel:123456789">+(123) 456-789</a></li>
                            <li><a href="mailto:info@domainname.com">info@domainname.com</a></li>
                        </ul>
                    </div>
                    <!-- Footer Contact End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Footer Newsletter Form Start -->
                    <div class="footer-newsletter-form footer-links">
                        <h3>Subscribe To Newsletter</h3>
                        <p>Stay updated with the latest development trends, tools and insights.</p>
                        <form id="newslettersForm" action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="mail" class="form-control" id="mail" placeholder="Email Address *" required>
                                <button type="submit" class="newsletter-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <!-- Footer Newsletter Form End -->
                </div>
            </div>
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Box Start -->
                        <div class="footer-copyright-box">
                            <div class="footer-copyright-text">
                                <p>Copyright © {{ date('Y') }} All Rights Reserved.</p>
                            </div>

                            <!-- Footer Menu Start -->
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><a href="{{ route('filsbase.about') }}">About Us</a></li>
                                    <li><a href="{{ route('filsbase.services') }}">Services</a></li>
                                    <li><a href="{{ route('filsbase.blog') }}">Blogs</a></li>
                                    <li><a href="{{ route('filsbase.contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- Footer Menu End -->
                        </div>
                        <!-- Footer Copyright  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Footer End -->
