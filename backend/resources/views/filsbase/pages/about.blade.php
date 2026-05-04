@extends('filsbase.layouts.app')

@section('title', 'About')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
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

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <!-- About Image Box Start -->
                    <div class="about-image-box">
                        <!-- Section Sub Title Start -->
                        <div class="section-sub-title">
                            <h3 class="wow fadeInUp">About Our Company</h3>
                        </div>
                        <!-- Section Sub Title End -->

                        <!-- About Image Start -->
                        <div class="about-us-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('frontend-images/about-us-image.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->
                    </div>
                    <!-- About Image Box End -->           
                </div>

                <div class="col-xl-8">
                    <!-- About Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-effect" data-cursor="-opaque">Delivering end to end software solutions that not only solve today's business challenges but also prepare you for the digital opportunities of tomorrow</h2>
                            <p class="wow fadeInUp">We go beyond traditional development by offering innovative, adaptive, and scalable software solutions. Our mission is to transform your ideas into powerful digital products that drive business growth and success.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">With expert guidance, a modern technology stack, and dedicated project management, we ensure your digital products are built to the highest standards and delivered on time, every time. We combine proactive defense, strategic planning, and real-time monitoring to ensure that your digital assets remain secure today and ready for the future.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Review Box Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- About Review Box Start -->
                            <div class="about-review-box">
                                <div class="about-client-box">
                                    <!-- Satisfy Client Images Start -->
                                    <div class="satisfy-client-images">
                                        <div class="satisfy-client-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend-images/author-1.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="satisfy-client-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend-images/author-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="satisfy-client-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend-images/author-3.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="satisfy-client-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend-images/author-4.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="satisfy-client-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend-images/author-5.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Satisfy Client Images End -->

                                    <!-- About Client Content Start -->
                                    <div class="about-client-content">
                                        <p>Our experts combine advanced technology with years</p>
                                    </div>
                                    <!-- About Client Content End -->
                                </div>

                                <!-- About Google Review Box Start -->
                                <div class="about-google-review-box">
                                    <!-- About Google Review Start -->
                                    <div class="about-google-review">
                                        <div class="about-google-review-header">
                                            <div class="icon-box">
                                                <img src="{{ asset('frontend-images/icon-google.svg') }}" alt="">
                                            </div>
                                            <div class="about-google-review-content">
                                                <p>Google Reviews</p>
                                            </div>
                                        </div>
                                        <div class="google-review-content">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <p>(<span class="counter">4.9</span>)</p>
                                        </div>
                                    </div>
                                    <!-- About Google Review End -->

                                    <!-- About Author Content Start -->
                                    <div class="about-author-content">
                                        <h3>Ronald Richards</h3>
                                        <p>CEO & Founder</p>
                                    </div>
                                    <!-- About Author Content End -->
                                </div>
                                <!-- About Google Review Box End -->
                            </div>
                            <!-- About Review Box End -->

                            <!-- About Circle Start -->
                            <div class="about-us-circle">
                                <a href="{{ route('filsbase.contact') }}"><img src="{{ asset('frontend-images/contact-us-circle.svg') }}" alt=""></a>
                            </div>
                            <!-- About Circle End -->
                        </div>
                        <!-- About Review Box End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Value Section Start -->
    <div class="our-value">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Our Value Image Box Start -->
                    <div class="our-value-image-box wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Our Value Image 1 Start -->
                        <div class="our-value-img-1">
                            <figure class="image-anime">
                                <img src="{{ asset('frontend-images/our-value-image-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Our Value Image 1 End -->

                        <!-- Our Value Image 2 Start -->
                        <div class="our-value-img-2">
                             <figure class="image-anime">
                                <img src="{{ asset('frontend-images/our-value-image-2.jpg') }}" alt="">
                            </figure>

                             <!-- Contact Us Circle Start -->
                            <div class="contact-us-circle">
                                <a href="{{ route('filsbase.contact') }}">
                                    <img src="{{ asset('frontend-images/contact-us-circle.svg') }}" alt="">
                                </a>
                            </div>
                            <!-- Contact Us Circle End -->
                        </div>
                        <!-- Our Value Image 1 End -->
                    </div>
                    <!-- Our Value Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Our Value Content Start -->
                    <div class="our-value-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Values</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">The core principles that guide our mission <span>in software development</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At the heart of our work lies a set of unwavering principles that shape every solution we deliver. We believe that great software development goes beyond writing code - it is built on creativity, collaboration, and a commitment to excellence.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Value List Start -->
                        <div class="our-value-list">
                            <!-- Our Value Item Start-->
                            <div class="our-value-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend-images/icon-our-value-1.svg') }}" alt="">
                                </div>
                                <div class="our-value-item-content">
                                    <h3>Our Mission</h3>
                                    <p>We are dedicated to building innovative digital products that solve real problems and create lasting value for our clients.</p>
                                </div>
                            </div>
                            <!-- Our Value Item End-->

                            <!-- Our Value Item Start-->
                            <div class="our-value-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend-images/icon-our-value-2.svg') }}" alt="">
                                </div>
                                <div class="our-value-item-content">
                                    <h3>Our Vision</h3>
                                    <p>We aim to be the most trusted development partner for businesses seeking to thrive in the digital world.</p>
                                </div>
                            </div>
                            <!-- Our Value Item End-->
                        </div>
                        <!-- Our Value List End -->
                    </div>
                    <!-- Our Value Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Value Section End -->

    <!-- Our Awards Section Start -->
    <div class="our-awards">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Award Info Start -->
                    <div class="awards-info">
                        <!-- Section Sub Title Start -->
                        <div class="section-sub-title">
                            <h3 class="wow fadeInUp">Our Awards</h3>
                        </div>
                        <!-- Section Sub Title End -->
                        
                        <!-- Award Image Start -->
                        <div class="award-image wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('frontend-images/our-awards-image.png') }}" alt="">
                        </div>
                        <!-- Award Image End -->
                    </div>
                    <!-- Award Info End -->
                </div>
                
                <div class="col-lg-9">
                    <!-- Award Content Start -->
                    <div class="our-award-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Celebrating our journey of innovation, trust & excellence <span>in software development</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Over the years, our dedication to safeguarding businesses and driving innovation has been recognized by industry leaders and global organizations. These awards are not just milestones but a reflection of the trust we've earned.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Award Item List Start -->
                        <div class="award-item-list">
                            <!-- Award Item Start -->
                            <div class="award-item wow fadeInUp">
                                <div class="award-item-info">
                                    <div class="award-year">
                                        <p>2021 - 2022</p>
                                    </div>
                                    <div class="award-item-body">
                                        <div class="award-item-title">
                                            <h3>Excellence in Digital Transformation</h3>
                                        </div>
                                        <div class="award-item-content">
                                            <p>Best Agency</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-item-button">
                                    <a href="{{ route('filsbase.contact') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Award Item End -->

                            <!-- Award Item Start -->
                            <div class="award-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="award-item-info">
                                    <div class="award-year">
                                        <p>2022 - 2023</p>
                                    </div>
                                    <div class="award-item-body">
                                        <div class="award-item-title">
                                            <h3>Excellence in Customer Trust and Cloud Solutions</h3>
                                        </div>
                                        <div class="award-item-content">
                                            <p>Digital Safety</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-item-button">
                                    <a href="{{ route('filsbase.contact') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Award Item End -->

                            <!-- Award Item Start -->
                            <div class="award-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="award-item-info">
                                    <div class="award-year">
                                        <p>2023 - 2024</p>
                                    </div>
                                    <div class="award-item-body">
                                        <div class="award-item-title">
                                            <h3>Best International Award for Software Innovation</h3>
                                        </div>
                                        <div class="award-item-content">
                                            <p>Partner Award</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-item-button">
                                    <a href="{{ route('filsbase.contact') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Award Item End -->

                            <!-- Award Item Start -->
                            <div class="award-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="award-item-info">
                                    <div class="award-year">
                                        <p>2024 - 2025</p>
                                    </div>
                                    <div class="award-item-body">
                                        <div class="award-item-title">
                                            <h3>Top Software Development Innovator for Advanced Solutions</h3>
                                        </div>
                                        <div class="award-item-content">
                                            <p>Product Excellence</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="award-item-button">
                                    <a href="{{ route('filsbase.contact') }}"><img src="{{ asset('frontend-images/arrow-primary.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <!-- Award Item End -->
                        </div>
                        <!-- Award Item List End -->
                    </div>
                    <!-- Award Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Awards Section End -->

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

    <!-- Our Features Section Start -->
    <div class="our-features">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our features</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Smart, scalable, and reliable development solutions designed <span>for modern businesses</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Feature Item Box Start -->
                    <div class="feature-item-box">
                        <!-- Feature Item Start -->
                        <div class="feature-item box-1 wow fadeInUp">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ asset('frontend-images/feature-image-1.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="feature-item-content">
                                <h3>Advanced Design & Prototyping</h3>
                                <p>Secure your cloud environments and ensure safe migration with compliance ready. Secure your cloud environments.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-2 wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Scrolling Ticker Box Start -->
                            <div class="scrolling-ticker feature-scrolling-ticker">
                                <div class="scrolling-ticker-box">
                                    <div class="scrolling-content">
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                    </div>
                                    
                                    <div class="scrolling-content">
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                    </div>
                                </div>
                                
                                <div class="scrolling-ticker-box scroll-reverse">
                                    <div class="scrolling-content">
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                    </div>
                                    
                                    <div class="scrolling-content">
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Web Development</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Mobile Apps</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">UI/UX Design</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">Cloud Solutions</span>
                                        <span><img src="{{ asset('frontend-images/icon-feature-ticker.svg') }}" alt="">API Integration</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Scrolling Ticker Box End -->
                            
                            <div class="feature-item-content">
                                <h3>Mobile-First Development</h3>
                                <p>Secure your cloud environments and ensure safe migration with compliance-ready. Secure your cloud environments and ensure safe migration.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ asset('frontend-images/feature-image-2.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="feature-item-content">
                                <h3>Scalable Architecture</h3>
                                <p>Secure your cloud environments and ensure safe migration with compliance-ready.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ asset('frontend-images/feature-image-3.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="feature-item-content">
                                <h3>Agile Sprints & Delivery</h3>
                                <p>Secure your cloud environments and ensure safe migration with compliance-ready.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->

                        <!-- Feature Item Start -->
                        <div class="feature-item box-5 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="feature-image">
                                <figure>
                                    <img src="{{ asset('frontend-images/feature-image-4.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="feature-item-content">
                                <h3>24/7 Support & Maintenance</h3>
                                <p>Secure your cloud environments and ensure safe migration with compliance-ready.</p>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                    <!-- Feature Item Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p><span>Free</span>Building what matters most - <a href="{{ route('filsbase.contact') }}">See how our solutions help you grow!</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Features Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Box Start -->
                    <div class="intro-video-box">
                        <!-- Our Video Circle Start -->
                        <div class="our-video-circle">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                <img src="{{ asset('frontend-images/our-video-circle.svg') }}" alt="">
                            </a> 
                        </div>     
                        <!-- Our Video Circle End -->

                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">A journey built on passion, innovation, and <span>exceptional craftsmanship</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Intro Video List Start -->
                        <div class="intro-video-list wow fadeInUp" data-wow-delay="0.2s">
                            <ul>
                                <li>From a Bold Vision to a Trusted Reality</li>
                                <li>Evolving With the Digital Landscape</li>
                                <li>Built on Trust, Innovation and Partnership</li>
                            </ul>
                        </div>
                        <!-- Intro Video List End -->
                    </div>
                    <!-- Intro Video Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Expert Team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">The minds, innovators, and problem-solvers driving our mission <span>to deliver excellence</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Darrell Steward</a></h3>
                                <p>Full Stack Developer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->                     
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Albert Flores</a></h3>
                                <p>Backend Developer</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->                     
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Jacob Jones</a></h3>
                                <p>Project Manager</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->                     
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="{{ route('filsbase.team-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/team-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('filsbase.team-single') }}">Ronald Richards</a></h3>
                                <p>Lead Architect</p>
                            </div>
                            <!-- Team Content End -->
                            
                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Item Body End -->                     
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p><span>Free</span> Let's Create Something Better Together - <a href="{{ route('filsbase.contact') }}">Contact Us Today!</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

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
