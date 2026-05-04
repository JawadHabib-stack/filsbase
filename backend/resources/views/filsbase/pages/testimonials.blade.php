@extends('filsbase.layouts.app')

@section('title', 'Testimonials')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>testimonials</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our testimonials</li>
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

    <!-- Page Testimonials Start -->
    <div class="page-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                     <div class="testimonial-item wow fadeInUp">
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
                                <p>”Partnering with this development team completely transformed our digital presence. They delivered our platform on time, on budget, and with outstanding code quality.”</p>
                            </div>
                            <div class="testimonial-author-content">
                                <h3>Sarah Johnson</h3>
                                <p>CEO, FinTech Innovations</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                     <div class="testimonial-item wow fadeInUp" data-wow-delay="0.2s">
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
                                <p>”We needed a scalable patient portal with complex data workflows. Their expertise helped us achieve something we couldn't have done with an in-house team.”</p>
                            </div>
                            <div class="testimonial-author-content">
                                <h3>Michael Lee</h3>
                                <p>IT Director, HealthSecure Systems</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                     <div class="testimonial-item wow fadeInUp" data-wow-delay="0.4s">
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
                                <p>”The team rebuilt our entire fintech infrastructure with clean architecture, modern APIs, and excellent documentation. The result exceeded our expectations.”</p>
                            </div>
                            <div class="testimonial-author-content">
                                <h3>John Carter</h3>
                                <p>CTO, FinBridge Ltd.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                     <div class="testimonial-item wow fadeInUp" data-wow-delay="0.6s">
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
                                <p>”Performance was a huge concern for our e-commerce store. With their custom solutions, page load times dropped by 60% and conversion rates improved significantly.”</p>
                            </div>
                            <div class="testimonial-author-content">
                                <h3>Emily Davis</h3>
                                <p>Founder, E-Commerce Hub</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                     <div class="testimonial-item wow fadeInUp" data-wow-delay="0.8s">
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
                                <p>"What sets them apart is not just the technology but the people behind it.”</p>
                            </div>
                            <div class="testimonial-author-content">
                                <h3>James Wilson</h3>
                                <p>COO, Global Logistics Corp</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Testimonial Item Start -->
                     <div class="testimonial-item wow fadeInUp" data-wow-delay="1s">
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
                                <p>”We were struggling to scale our cloud infrastructure, but their tailored DevOps solutions reduced our deployment time from days to hours.”</p>
                            </div>
                            <div class="testimonial-author-content">
                                <h3>Sarah Mitchell</h3>
                                <p>MD</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Testimonials End -->

    <!-- How It Work Section Start -->
    <div class="how-it-work">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">How It Works</h3>
                        <h2 class="text-effect" data-cursor="-opaque">Smart development strategies designed to discover, design, <span class="work-title-images"><img src="{{ asset('frontend-images/author-1.jpg') }}" alt=""><img src="{{ asset('frontend-images/author-2.jpg') }}" alt=""><img src="{{ asset('frontend-images/author-3.jpg') }}" alt=""><img src="{{ asset('frontend-images/author-4.jpg') }}" alt=""></span> build, <span>and deliver</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp">
                        <!-- How Work Item Header Start -->
                        <div class="how-work-item-header">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-how-it-work-1.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-no">
                                <h3>01</h3>
                            </div>
                        </div>
                        <!-- How Work Item Header End -->

                        <!-- How Work Item Body Start -->
                        <div class="how-work-item-body">
                            <div class="how-work-item-content">
                                <h3>Discovery & Planning</h3>
                                <p>We start with a deep dive into your business goals, requirements, and target audience.</p>
                            </div>                            
                            <div class="how-work-btn">
                                <a href="{{ route('filsbase.contact') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>                        
                        <!-- How Work Item Body End -->
                    </div>
                    <!-- How Work Item End -->
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- How Work Item Header Start -->
                        <div class="how-work-item-header">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-how-it-work-2.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-no">
                                <h3>02</h3>
                            </div>
                        </div>
                        <!-- How Work Item Header End -->

                        <!-- How Work Item Body Start -->
                        <div class="how-work-item-body">
                            <div class="how-work-item-content">
                                <h3>Design & Prototyping</h3>
                                <p>Our designers craft wireframes and interactive prototypes for your approval.</p>
                            </div>                            
                            <div class="how-work-btn">
                                <a href="{{ route('filsbase.contact') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>                        
                        <!-- How Work Item Body End -->
                    </div>
                    <!-- How Work Item End -->
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- How Work Item Header Start -->
                        <div class="how-work-item-header">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-how-it-work-3.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-no">
                                <h3>03</h3>
                            </div>
                        </div>
                        <!-- How Work Item Header End -->

                        <!-- How Work Item Body Start -->
                        <div class="how-work-item-body">
                            <div class="how-work-item-content">
                                <h3>Development & Testing</h3>
                                <p>We build your solution using modern technologies with rigorous QA testing at every step.</p>
                            </div>                            
                            <div class="how-work-btn">
                                <a href="{{ route('filsbase.contact') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>                        
                        <!-- How Work Item Body End -->
                    </div>
                    <!-- How Work Item End -->
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- How Work Item Header Start -->
                        <div class="how-work-item-header">
                            <div class="icon-box">
                                <img src="{{ asset('frontend-images/icon-how-it-work-4.svg') }}" alt="">
                            </div>
                            <div class="how-work-item-no">
                                <h3>04</h3>
                            </div>
                        </div>
                        <!-- How Work Item Header End -->

                        <!-- How Work Item Body Start -->
                        <div class="how-work-item-body">
                            <div class="how-work-item-content">
                                <h3>Launch & Ongoing Support</h3>
                                <p>We deploy your product live and provide ongoing maintenance, updates, and dedicated support.</p>
                            </div>                            
                            <div class="how-work-btn">
                                <a href="{{ route('filsbase.contact') }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>                        
                        <!-- How Work Item Body End -->
                    </div>
                    <!-- How Work Item End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-footer-contact wow fadeInUp" data-wow-delay="0.8s">
                        <p><span><img src="{{ asset('frontend-images/icon-phone-white.svg') }}" alt=""></span> Building your vision step by step - <a href="{{ route('filsbase.contact') }}">Explore how our process delivers results!</a></p>
                        <ul>
                            <li>4.9/5</li>
                            <li><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Over 5000 Reviews</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section Start -->
     
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
