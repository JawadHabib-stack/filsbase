@extends('filsbase.layouts.app')

@section('title', 'Service Single')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Web <span>Development</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('filsbase.services') }}">services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Web Development</li>
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

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="page-category-list wow fadeInUp">
                            <h3>Our Premium Services</h3>
                            <ul>
                                <li><a href="#">Mobile App Development</a></li>
                                <li><a href="#">UI/UX Design</a></li>
                                <li><a href="#">DevOps & Cloud Deployment</a></li>
                                <li><a href="#">Agile Sprints & Delivery</a></li>
                                <li><a href="#">Custom Software Development</a></li>
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.25s">
                            <div class="sidebar-cta-content">
                                <h3>Get In Touch</h3>
                                <h2>Get in Touch With Our Development Experts</h2>
                                <p>Ready to build something great? Reach out and let's bring your idea to life.</p>
                            </div>
                            <div class="sidebar-cta-btn">
                                <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">Let's Talk</a>
                            </div>
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Page Single Image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('frontend-images/service-single-image.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Page Single Image End -->
                        
                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <p class="wow fadeInUp">Our web development service covers everything from building responsive landing pages to complex full-stack applications. We use modern frameworks like React, Next.js, and Node.js to deliver fast, scalable, and maintainable products tailored to your business goals.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Whether you need a brand-new website, a web app rebuild, or ongoing enhancements, our team brings deep technical expertise and a collaborative approach to every project. We prioritize performance, accessibility, and clean code throughout the entire development lifecycle.</p>

                            <!-- Service Benefits Box Start -->
                            <div class="service-benefits-box">
                                <h2 class="text-anime-style-2">Built In Benefits for <span>Faster Delivery</span></h2>
                                <p class="wow fadeInUp">Every development solution we deliver is built with more than just code in mind. Our services come with integrated practices that accelerate delivery, maintain quality, and ensure your product is ready to grow with your business from day one.</p>

                                <!-- Service Benefits List Start -->
                                <div class="service-benefit-list">
                                    <!-- Service Benefits Item Start -->
                                    <div class="service-benefit-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend-images/icon-service-benefit-1.svg') }}" alt="">
                                        </div>
                                        <div class="service-benefit-item-content">
                                            <h3>Agile Development Cycles</h3>
                                            <p>We iterate rapidly with short sprints, giving you working software faster and feedback loops that keep the project on track.</p>
                                            <ul>
                                                <li>Faster time to market.</li>
                                                <li>Transparent progress at every stage.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Service Benefits Item End -->

                                    <!-- Service Benefits Item Start -->
                                    <div class="service-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="icon-box">
                                            <img src="{{ asset('frontend-images/icon-service-benefit-2.svg') }}" alt="">
                                        </div>
                                        <div class="service-benefit-item-content">
                                            <h3>Scalable Architecture Design</h3>
                                            <p>We design systems built to scale — from startup MVP to enterprise-grade platform without costly rewrites.</p>
                                            <ul>
                                                <li>Handle 10x traffic growth effortlessly.</li>
                                                <li>Modular, maintainable codebase.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Service Benefits Item End -->
                                </div>
                                <!-- Service Benefits List End -->
                            </div>
                            <!-- Service Benefits Box End -->
                            
                            <!-- Service Security Box Start -->
                            <div class="service-security-box">
                                <h2 class="text-anime-style-2">A Clear Path to <span>Successful Delivery</span></h2>
                                <p class="wow fadeInUp">Software development can feel complex with many moving parts. Our mission is to simplify this journey with a clear, structured process that turns your vision into a live product without the stress.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">We start with deep discovery to align on goals, then move into design and development with regular check-ins. After launch, we stay with you for ongoing support, performance monitoring, and continuous improvements as your product grows.</p>

                                <!-- Service Security Steps Start -->
                                <div class="service-security-steps">
                                    <!-- Security Step Item Start -->
                                    <div class="security-step-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="security-step-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('frontend-images/icon-security-step-1.svg') }}" alt="">
                                            </div>
                                            <div class="security-step-no">
                                                <h3>01</h3>
                                            </div>
                                        </div>
                                        <div class="security-step-body">
                                            <div class="security-step-content">
                                                <h3>Plan & Discover</h3>
                                                <p>We align on your goals, audience, and technical requirements.</p>
                                            </div>
                                            <div class="security-step-btn">
                                                <a href="{{ route('filsbase.contact') }}" class="readmore-btn">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Security Step Item End -->

                                    <!-- Security Step Item Start -->
                                    <div class="security-step-item wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="security-step-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('frontend-images/icon-security-step-2.svg') }}" alt="">
                                            </div>
                                            <div class="security-step-no">
                                                <h3>02</h3>
                                            </div>
                                        </div>
                                        <div class="security-step-body">
                                            <div class="security-step-content">
                                                <h3>Build & Iterate</h3>
                                                <p>We develop your solution in agile sprints with regular reviews.</p>
                                            </div>
                                            <div class="security-step-btn">
                                                <a href="{{ route('filsbase.contact') }}" class="readmore-btn">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Security Step Item End -->

                                    <!-- Security Step Item Start -->
                                    <div class="security-step-item wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="security-step-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('frontend-images/icon-security-step-3.svg') }}" alt="">
                                            </div>
                                            <div class="security-step-no">
                                                <h3>03</h3>
                                            </div>
                                        </div>
                                        <div class="security-step-body">
                                            <div class="security-step-content">
                                                <h3>Launch & Support</h3>
                                                <p>We deploy your product and provide ongoing maintenance.</p>
                                            </div>
                                            <div class="security-step-btn">
                                                <a href="{{ route('filsbase.contact') }}" class="readmore-btn">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Security Step Item End -->
                                </div>
                                <!-- Service Security Steps End -->

                                <!-- Section Footer Text Start -->
                                <div class="section-footer-text section-footer-contact wow fadeInUp" data-wow-delay="1s">
                                    <p><span><img src="{{ asset('frontend-images/icon-phone-white.svg') }}" alt=""></span> Building your vision step by step - <a href="{{ route('filsbase.contact') }}">Explore how our process delivers results!</a></p>
                                </div>
                                <!-- Section Footer Text End -->
                            </div>
                            <!-- Service Security Box End -->
                        </div>
                        <!-- Service Entry End -->

                        <!-- Page Single FAQs Start -->
                        <div class="page-single-faqs">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently <span>asked questions</span></h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="faqaccordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Q1. What technologies do you use for web development?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>We work with modern stacks including React, Next.js, Node.js, Python, and more. The choice depends on your project requirements, scalability needs, and existing infrastructure.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Q2. How long does a typical web development project take?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Timelines vary by scope. A simple website takes 2–4 weeks; a complex web app can take 3–6 months. We provide a detailed timeline during discovery and keep you updated throughout.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Q3. Do you offer post-launch support and maintenance?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Yes. We offer ongoing maintenance plans that cover bug fixes, performance monitoring, security patches, and feature updates to keep your product running smoothly.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Q4. Can you redesign or rebuild my existing website?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Absolutely. We handle redesigns and full rebuilds regularly. We audit your existing site, identify what to keep or improve, and deliver a modern, high-performing result.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End --> 
                                
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                           Q5. Will my website be mobile-friendly and SEO-ready?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>Yes, every website we build is fully responsive and follows SEO best practices including fast load times, semantic HTML, structured data, and on-page optimization.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End --> 
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- Page Single FAQs End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->
@endsection
