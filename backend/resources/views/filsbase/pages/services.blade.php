@extends('filsbase.layouts.app')

@section('title', 'Services')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>services</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our services</li>
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

    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row service-list">
                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">Web Development</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Build fast, scalable websites and web applications with modern frameworks and best practices.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-1.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-1-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item active wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">Mobile App Development</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Native and cross-platform mobile apps that deliver seamless experiences on iOS and Android.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-2.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-2-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">UI/UX Design</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Beautiful, intuitive interfaces designed to engage users and convert visitors into loyal customers.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-3.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-3-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">Custom Software Development</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Tailor-made software solutions built from scratch to fit your exact business needs and workflows.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-4.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-4-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">API Development & Integration</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Build robust REST and GraphQL APIs that connect your systems and third-party services seamlessly.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-5.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-5-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">Digital Transformation</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Modernize legacy systems and guide your business through digital transformation with the right tech stack.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-6.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-6-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">DevOps & Cloud Deployment</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Automate deployments with CI/CD pipelines, Docker, Kubernetes, and cloud infrastructure management.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-7.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-7-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="1.4s">
                        <!-- Service Item Body Start -->
                        <div class="service-item-body">
                            <!-- Service Item Header Start -->
                            <div class="service-item-header">
                                <div class="service-item-title">
                                    <h3><a href="{{ route('filsbase.service-single') }}">QA & Software Testing</a></h3>
                                </div>
                                <div class="service-item-btn">
                                    <a href="{{ route('filsbase.service-single') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Service Item Header End -->

                            <!-- Service Item Content Start -->
                            <div class="service-item-content">
                                <p>Deliver bug-free software with automated testing, code reviews, and performance benchmarking.</p>
                            </div>
                            <!-- Service Item Content End -->
                        </div>
                        <!-- Service Item Body End -->

                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend-images/icon-service-item-8.svg') }}" alt="">  
                        </div>
                        <!-- Icon Box End -->

                        <!-- Service Bg Icon Start -->
                        <div class="service-bg-icon">
                            <img src="{{ asset('frontend-images/icon-service-item-8-bg.svg') }}" alt="">
                        </div>
                        <!-- Service Bg Icon End -->
                    </div>
                    <!-- Service Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services End -->

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
                                                <p>“Partnering with this development team has been a game-changer for our business. Their expertise in building scalable web applications, attention to detail, and commitment to on-time delivery have exceeded our expectations. Our platform now handles 10x the traffic seamlessly.”</p>
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
                                                <p>“Partnering with this development team has been a game-changer for our business. Their expertise in building scalable web applications, attention to detail, and commitment to on-time delivery have exceeded our expectations. Our platform now handles 10x the traffic seamlessly.”</p>
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
