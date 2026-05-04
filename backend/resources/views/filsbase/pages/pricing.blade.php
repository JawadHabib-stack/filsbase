@extends('filsbase.layouts.app')

@section('title', 'Pricing')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our Pricing <span>Plans</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Pricing Plans</li>
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

    <!-- Page Pricing Start -->
    <div class="page-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Pricing Box Start -->
                    <div class="our-pricing-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="our-pricing-swich form-check form-switch">
                            <label class="form-check-label" for="planToggle" id="toggleLabelMonthly">Monthly</label>
                            <span><input class="form-check-input" type="checkbox" id="planToggle"></span>
                            <label class="form-check-label" for="planToggle" id="toggleLabelAnnually">Annually</label>
                        </div>

                        <!-- Pricing Tab Item Start -->
                        <div class="pricing-tab-item" id="monthly">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- Pricing Item Start -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Basic Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$49.00<sub>/Monthly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- Pricing Item Start -->
                                    <div class="pricing-item highlighted-box">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Standard Plan</h3>
                                            <p>Discover how our truste have empowered businesses.</p>
                                            <h2>$149.00<sub>/Monthly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- Pricing Item Start -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Premium Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$249.00<sub>/Monthly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- Pricing Item Start -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Enterprise Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$349.00<sub>/Monthly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Pricing Tab Item End -->

                        <!-- Pricing Tab Item Start -->
                        <div class="pricing-tab-item d-none" id="annually">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Basic Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$99.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item highlighted-box">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Standard Plan</h3>
                                            <p>Discover how our truste have empowered businesses.</p>
                                            <h2>$249.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Premium Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$349.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Enterprise Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$449.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Landing Page Development</li>
                                                <li>Mobile Responsive Design</li>
                                                <li>Basic SEO Setup</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Pricing Tab Item End -->
                    </div>
                    <!-- Our Pricing Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Pricing Benifit List Start -->
                    <div class="pricing-benefit-list" data-wow-delay="0.4s">
                        <ul>
                            <li><img src="{{ asset('frontend-images/icon-pricing-benefit-1.svg') }}" alt="">Get 30 day free trial</li>
                            <li><img src="{{ asset('frontend-images/icon-pricing-benefit-2.svg') }}" alt="">No any hidden fee pay</li>
                            <li><img src="{{ asset('frontend-images/icon-pricing-benefit-3.svg') }}" alt="">You can cancel anytime </li>
                        </ul>
                    </div>
                    <!-- Pricing Benifit List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Pricing End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonials dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <!-- Testimonial Content Start -->
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Testimonials</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">What our clients say about building <span>great products with us</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover how our development expertise has helped businesses launch successful digital products and grow online.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Testimonial Button Start -->
                        <div class="testimonial-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('filsbase.testimonials') }}" class="btn-default btn-highlighted">View All Reviews</a>
                        </div>
                        <!-- Testimonial Button End -->

                        <!-- Testimonial Google Review Start -->
                        <div class="testimonial-google-review wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Google Review Header Start -->
                            <div class="about-google-review-header">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend-images/icon-google.svg') }}" alt="">
                                </div>
                                <div class="about-google-review-content">
                                    <p>Google Reviews</p>
                                </div>
                            </div>
                            <!-- About Google Review Header End -->

                            <!-- Google Rating Content Start -->
                            <div class="google-review-content">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p>(<span class="counter">4.9</span>)</p>
                            </div>
                            <!-- Google Rating Content End -->
                        </div>
                        <!-- Testimonial Google Review End -->
                    </div>
                    <!-- Testimonial Content End -->
                </div>

                <div class="col-xl-7 col-lg-6">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-logo">
                                                <img src="{{ asset('frontend-images/testimonial-company-logo-1.svg') }}" alt="">
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('frontend-images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>                                         
                                        <div class="testimonial-body">
                                            <div class="testimonial-content">
                                                <p>“Partnering with this team has completely transformed our product. Their deep technical expertise, clear communication, and fast delivery gave us a platform we're truly proud of. We launched on time, under budget, and user engagement increased by over 40% in the first month.”</p>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h3>Darlene Robertson</h3>
                                                <p>CEO & Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-logo">
                                                <img src="{{ asset('frontend-images/testimonial-company-logo-2.svg') }}" alt="">
                                            </div>
                                            <div class="testimonial-quote">
                                                <img src="{{ asset('frontend-images/testimonial-quote.svg') }}" alt="">
                                            </div>
                                        </div>                                         
                                        <div class="testimonial-body">
                                            <div class="testimonial-content">
                                                <p>“Partnering with this team has completely transformed our product. Their deep technical expertise, clear communication, and fast delivery gave us a platform we're truly proud of. We launched on time, under budget, and user engagement increased by over 40% in the first month.”</p>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h3>John Carter</h3>
                                                <p>CTO, FinBridge Ltd.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>

                            <!-- Testimonial Slider Button Start -->
                            <div class="testimonial-slider-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                            <!-- Testimonial Slider Button End -->
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <!-- Our Faqs Content Start -->
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Everything you want to <span>know about development</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">From project timelines to technical requirements, we provide clear answers to help you make informed decisions.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Faq Button Start -->
                        <div class="faq-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('filsbase.faqs') }}" class="btn-default">View all FAQs</a>
                        </div>
                        <!-- Faq Button End -->
                    </div>
                    <!-- Our Faqs Content End -->
                </div>

                <div class="col-xl-7">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Q1: What technologies and frameworks do you specialize in?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more, tailored to each project's unique requirements.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    Q2: How long does it take to build a website or app?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more, tailored to each project's unique requirements.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Q3: Do you offer post-launch support and maintenance?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more, tailored to each project's unique requirements.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Q4: What does your development process look like?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more, tailored to each project's unique requirements.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                        
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Q5: Can you redesign my existing website or app?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more, tailored to each project's unique requirements.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->
@endsection
