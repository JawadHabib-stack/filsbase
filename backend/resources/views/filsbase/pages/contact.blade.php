@extends('filsbase.layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-1.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-2.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-3.svg') }}" alt=""></span>
                <span><img src="{{ asset('frontend-images/company-supports-logo-4.svg') }}" alt=""></span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-phone-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Contact us</h3>
                                <p><a href="tel:+123456789">+(123) 456-789</a></p>
                                <p><a href="tel:+798765878">+(798) 765-878</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-location-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Address</h3>
                                <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                        
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-mail-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Email us</h3>
                                <p><a href="mailto:info@domainname.com">info@domainname.com</a></p>
                                <p><a href="mailto:support@domainname.com">support@domainname.com</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-location-white.svg') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Address</h3>
                                <p>Monday - Friday : 10AM - 5:00PM</p>
                                <p>Saturday : 11AM - 2:00PM</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info List End -->
                </div>
                
                <div class="col-xl-5">
                    <!-- Contact Us Content Start -->
                    <div class="contact-content-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Get In Touch</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Contact us <span>today!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions or need expert web & software development support? Our team is ready to guide you with tailored solutions.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Google Map IFrame Start -->
                        <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.4s">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map IFrame End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-xl-7">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-2">Fill up the <span>form</span></h2>
                            <p class="wow fadeInUp">Simply fill out the form below with your details and requirements, and our team will get back to you promptly with the right solutions for your needs.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>
        
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Your Last Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Your Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>
        
                                <div class="form-group col-md-12 mb-5">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Any Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
        
                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default"><span>Submit Form</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->
@endsection
