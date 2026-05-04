@extends('filsbase.layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section Start -->
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Hero Box Start -->
                    <div class="hero-box">
                        <!-- Hero Content Start -->
                        <div class="hero-content">                            
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp"><span>New!</span> Architects of Your Digital Future</h3>
                                <h1 class="text-anime-style-2" data-cursor="-opaque">Powerful, scalable & intelligent development solutions that bring your <span>ideas to life</span></h1>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Our experts combine advanced technology with years of experience to deliver end-to-end digital solutions, ensuring your business grows faster and smarter.</p>
                            </div>
                            <!-- Section Title End -->
    
                            <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Hero Button Start -->
                                <div class="hero-btn">
                                    <a href="{{ route('filsbase.contact') }}" class="btn-default">Get Started Now</a>
                                </div>
                                <!-- Hero Button End -->
                                
                                <!-- Video Play Button Start -->
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                    <p>Watch Our Video</p>
                                </div>
                                <!-- Video Play Button End -->
                            </div>
                        </div>
                        <!-- Hero Content End -->
                    
                        <!-- Hero Item List Start -->
                        <div class="hero-item-list">
                            <!-- Hero Box 1 Start -->
                            <div class="hero-item box-1 dark-box wow fadeInUp">
                                <div class="hero-item-content">
                                    <h3>“ Software is not just about code, it's about crafting experiences that transform businesses.”</h3>
                                    <p>Robert Fox, <span>CEO at Filsbase</span></p>
                                </div>
                                <div class="hero-author-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend-images/hero-author-image.jpg') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Hero Box 1 End -->

                            <!-- Hero Box 2 Start -->
                            <div class="hero-item box-2 dark-box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="hero-counter hero-item-content">
                                    <h2><span class="counter">15</span>K+</h2>
                                </div>
                                <div class="hero-item-content">
                                    <h3>Empowering businesses</h3>
                                    <p>Our experts combine advanced technology with years</p>
                                </div>
                            </div>
                            <!-- Hero Box 2 End -->

                            <!-- Hero Box 3 Start -->
                            <div class="hero-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="hero-client-box">
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

                                    <!-- Google Rating Content Start -->
                                    <div class="hero-client-content hero-item-content">
                                        <h3>15K+ Satisfied Clients</h3>
                                        <p>Our experts combine advanced technology with years</p>
                                    </div>
                                    <!-- Google Rating Content End -->
                                </div>
                                
                                <div class="hero-item-content">
                                    <h2><span class="counter">500</span>+</h2>
                                    <p>Every day, our team ships 500+ features, updates, and improvements.</p>
                                </div>
                            </div>
                            <!-- Hero Box 3 End -->

                            <!-- Hero Box 4 Start -->
                            <div class="hero-item box-4 dark-box wow fadeInUp" data-wow-delay="0.6s">
                                <div class="hero-item-content">
                                    <h3>Empowering businesses to build smarter, scale faster, and innovate boldly.</h3>
                                </div>

                                <div class="hero-item-image">
                                    <figure>
                                        <img src="{{ asset('frontend-images/hero-item-image.png') }}" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Hero Box 4 End -->
                        </div>
                        <!-- Hero Item List End -->
                    </div>
                    <!-- Hero Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    
    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('frontend-images/1.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/2.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3%20(2).png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/4.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/1.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/2.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3%20(2).png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/4.png') }}" alt="" /></span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('frontend-images/1.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/2.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3%20(2).png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/4.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/1.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/2.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3.png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/3%20(2).png') }}" alt="" /></span>
                <span><img src="{{ asset('frontend-images/4.png') }}" alt="" /></span>
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
                            <p class="wow fadeInUp" data-wow-delay="0.2s">With expert guidance, a modern technology stack, and dedicated project management, we ensure your digital products are built to the highest standards and delivered on time, every time. We combine innovative thinking, agile methodology, and technical excellence to ensure that your software is scalable, maintainable, and ready for the future.</p>
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
                                <a href="{{ route('filsbase.about') }}"><img src="{{ asset('frontend-images/about-us-circle.svg') }}" alt=""></a>
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

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Empowering businesses with tailored web & software <span>solutions that fit</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-5">
                    <!-- Section Content Btn Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We provide customized development services designed to match your business needs, whether you're a startup or a global enterprise.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Btn Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('filsbase.services') }}" class="btn-default">View All Services</a>
                        </div>
                        <!-- Section Btn End -->
                    </div>
                    <!-- Section Content Btn End -->
                </div>
            </div>

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
                                <p>We build fast, responsive, and modern websites and web applications tailored to your brand.</p>
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
                                <p>Scalable, robust custom software solutions built from the ground up to solve your unique business challenges.</p>
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

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p><span>Free</span> Building what matters most - <a href="{{ route('filsbase.contact') }}">See how our solutions help you grow!</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why Choose Us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Future-ready development solutions that <span>go beyond just code</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We don't just write code - we architect solutions that scale, perform, and evolve with your business needs.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Body Start -->
                        <div class="why-choose-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Why Choose Counter Content Start -->
                            <div class="why-choose-counter-content">
                                <!-- Why Choose Counter Start -->
                                <div class="why-choose-counter">
                                    <div class="circle" data-value="0.95">
                                        <div class="progress_value"><span class="pro_data"></span><span>%</span></div>
                                    </div>
                                </div>
                                <!-- Why Choose Counter End -->

                                <!-- Why Choose Counter Info Start -->
                                <div class="why-choose-counter-info">
                                    <p>“Development is not just about writing code, its about crafting solutions that drive real business growth.”</p>
                                </div>
                                <!-- Why Choose Counter Info End -->
                            </div>
                            <!-- Why Choose Counter Content End -->

                            <!-- Why Choose Counter List Start -->
                            <div class="why-choose-counter-list">
                                <ul>
                                    <li>Agile Delivery</li>
                                    <li>24/7 Support</li>
                                    <li>Scalable Architecture</li>
                                </ul>
                            </div>
                            <!-- Why Choose Counter List End -->
                        </div>
                        <!-- Why Choose Body End -->

                        <!-- Why Choose Item List Start -->
                        <div class="why-choose-item-list wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend-images/icon-why-choose-1.svg') }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Agile Development Process</h3>
                                    <p>We deliver your project in iterative sprints, ensuring continuous feedback and rapid time-to-market.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend-images/icon-why-choose-2.svg') }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Custom-Built Solutions</h3>
                                    <p>We architect solutions that are 100% tailored to your specific business requirements and goals.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Item List End -->

                        <!-- Why Choose Button Start -->
                        <div class="why-choose-btn wow fadeInUp" data-wow-delay="0.8s">
                            <a href="{{ route('filsbase.contact') }}" class="btn-default">Learn more</a>
                        </div>
                        <!-- Why Choose Button End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Why Choose Image Box Start -->
                    <div class="why-choose-image-box wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Why Choose Image Box 1 Start -->
                        <div class="why-choose-img-box-1">
                            <!-- Why Choose Image Start -->
                            <div class="why-choose-image image-1">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('frontend-images/why-choose-image-1.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Image End -->

                            <!-- Year Experience Box Start -->
                            <div class="year-experience-box">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Years Of Experience</p>
                            </div>
                            <!-- Year Experience Box End -->
                        </div>
                        <!-- Why Choose Image Box 1 End -->

                        <!-- Why Choose Image Box 2 Start -->
                        <div class="why-choose-img-box-2">
                            <!-- Why Choose Image Start -->
                            <div class="why-choose-image image-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('frontend-images/why-choose-image-2.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Image End -->

                            <!-- Why Choose Image Start -->
                            <div class="why-choose-image image-3">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('frontend-images/why-choose-image-3.jpg') }}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Image End -->
                        </div>
                        <!-- Why Choose Image Box 1 End -->
                    </div>
                    <!-- Why Choose Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

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

    <!-- Our Case Studies Section Start -->
    <div class="our-case-study">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Case Studies</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Real world examples of our work that builds <span>trust and delivers results</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-5">
                    <!-- Section Content Btn Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>See how our tailored approach to development transforms ideas into impactful digital products that drive real business results.</p>
                        </div>
                        <!-- Section Title Content End -->
                        
                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('filsbase.case-study') }}" class="btn-default">View All Studies</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Btn End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">E-Commerce Platform</a></h3>
                            <ul>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">DataSecurity</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->
                        
                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Fintech Web App</a></h3>
                            <ul>
                                <li><a href="#">Firewall</a></li>
                                <li><a href="#">ECommerce</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Healthcare Portal</a></h3>
                            <ul>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">DataPrivacy</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Case Study Item Start -->
                    <div class="case-study-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Case Study Image Start -->
                        <div class="case-study-image">
                            <a href="{{ route('filsbase.case-study-single') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('frontend-images/case-study-image-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Case Study Image End -->

                        <!-- Case Study Item Button Start -->
                        <div class="case-study-item-btn">
                            <a href="{{ route('filsbase.case-study-single') }}">
                                <img src="{{ asset('frontend-images/arrow-white.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Case Study Item Button End -->

                        <!-- Case Study Iten Content Start -->
                        <div class="case-study-item-content">
                            <h3><a href="{{ route('filsbase.case-study-single') }}">Startup MVP Launch</a></h3>
                            <ul>
                                <li><a href="#">Startup</a></li>
                                <li><a href="#">Security</a></li>
                            </ul>
                        </div>
                        <!-- Case Study Item Content End -->
                    </div>
                    <!-- Case Study Item End -->
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
    <!-- Our Case Studies Section End -->

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
                                <p>We craft intuitive UI/UX designs and interactive prototypes that align with your brand and user needs before a single line of code is written.</p>
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
                                <p>Every product we build is optimized for mobile devices first, ensuring a fast and seamless experience across all screen sizes and platforms.</p>
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
                                <p>We design systems built to grow with your business — from clean API design to cloud-native infrastructure that scales on demand.</p>
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
                                <p>We work in short, focused sprints with regular demos and feedback loops, keeping you in control of the product direction at every stage.</p>
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
                                <p>Our team stays with you after launch — monitoring performance, fixing issues, and shipping updates so your product keeps running smoothly.</p>
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

    <!-- Our Pricing Section Start -->
    <div class="our-pricing dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">our pricing plans</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Affordable, scalable development services for businesses <span>of all sizes</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Pricing Box Start -->
                    <div class="our-pricing-box" data-wow-delay="0.2s">
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
                                            <a href="{{ route('filsbase.contact') }}" class="btn-default btn-highlighted">get started</a>
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
            </div>

            <div class="row">
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
    <!-- Our Pricing Section End -->

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
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more.</p>
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
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more.</p>
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
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more.</p>
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
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more.</p>
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
                                    <p>We specialize in modern technologies including React, Next.js, Node.js, Python, Flutter, and more.</p>
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
                                                <p>CTO, FinSecure Ltd.</p>
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

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest Blogs</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Stay updated with the latest trends, tips, and <span>development insights</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-5">
                    <!-- Section Content Btn Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Our blog delivers actionable advice, expert opinions, and in-depth analysis to help your business leverage technology and grow online.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Btn Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('filsbase.blog') }}" class="btn-default">View All Blogs</a>
                        </div>
                        <!-- Section Btn End -->
                    </div>
                    <!-- Section Content Btn End -->
                </div>
            </div>

            <div class="row">
                @foreach($posts as $post)
                <div class="col-xl-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" @if($loop->index > 0) data-wow-delay="{{ $loop->index * 0.2 }}s" @endif>
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="{{ route('filsbase.blog-single', $post->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ Str::startsWith($post->image, 'http') ? $post->image : asset('storage/'.$post->image) }}" alt="{{ $post->name }}">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Meta Start -->
                            <div class="post-meta">
                                <span><i class="fa-regular fa-clock"></i> {{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}</span>
                            </div>
                            <!-- Post Meta End -->
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('filsbase.blog-single', $post->slug) }}">{{ $post->name }}</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Readmore Button Start-->
                            <div class="post-item-btn">
                                <a href="{{ route('filsbase.blog-single', $post->slug) }}" class="readmore-btn">read more</a>
                            </div>
                            <!-- Post Item Readmore Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->
@endsection
